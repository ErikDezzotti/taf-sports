<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Contato Controller
 *
 * Gerencia o formulário de contato com validação, proteção CSRF e envio de email
 *
 * @package TAF Sports
 * @author TAF Sports Development Team
 */
class Contato extends CI_Controller {

    /**
     * Construtor - carrega dependências
     */
    public function __construct() {
        parent::__construct();

        // Carrega helpers e libraries necessárias
        $this->load->helper(array('form', 'url', 'security'));
        $this->load->library(array('form_validation', 'email', 'session'));
        $this->load->model('home_model', 'banco');
    }

    /**
     * Exibe a página de contato
     */
    public function index() {
        $dados = array(
            'titulo' => 'Contato - TAF Sports',
            'pagina' => 'Contato',
            'descricao' => 'Entre em contato com a TAF Sports',
            'tipo' => '',
            'config' => $this->banco->config()
        );

        $this->load->view('inc_topo', $dados);
        $this->load->view('contato', $dados);
        $this->load->view('inc_rodape', $dados);
    }

    /**
     * Processa o envio do formulário de contato
     *
     * SEGURANÇA:
     * - Validação de campos
     * - Proteção CSRF (já habilitada no config.php)
     * - XSS filtering (já habilitado no config.php)
     * - Rate limiting via sessão (max 3 emails por hora)
     */
    public function enviar() {
        // Verifica se é uma requisição POST
        if ($this->input->method() !== 'post') {
            show_404();
            return;
        }

        // Rate limiting - previne spam
        if (!$this->check_rate_limit()) {
            $this->session->set_flashdata('error', 'Você já enviou muitas mensagens. Aguarde alguns minutos.');
            redirect('contato');
            return;
        }

        // Define regras de validação
        $this->form_validation->set_rules('nome', 'Nome', 'required|trim|min_length[3]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('email', 'E-mail', 'required|trim|valid_email|max_length[100]|xss_clean');
        $this->form_validation->set_rules('telefone', 'Telefone', 'trim|max_length[20]|xss_clean');
        $this->form_validation->set_rules('assunto', 'Assunto', 'required|trim|min_length[3]|max_length[200]|xss_clean');
        $this->form_validation->set_rules('mensagem', 'Mensagem', 'required|trim|min_length[10]|max_length[2000]|xss_clean');

        // Mensagens de erro customizadas em português
        $this->form_validation->set_message('required', 'O campo %s é obrigatório.');
        $this->form_validation->set_message('valid_email', 'Por favor, informe um e-mail válido.');
        $this->form_validation->set_message('min_length', 'O campo %s deve ter no mínimo %s caracteres.');
        $this->form_validation->set_message('max_length', 'O campo %s deve ter no máximo %s caracteres.');

        // Valida os dados
        if ($this->form_validation->run() === FALSE) {
            // Se falhar, volta para o formulário com os erros
            $this->session->set_flashdata('error', validation_errors('<div class="alert-text">', '</div>'));
            redirect('contato');
            return;
        }

        // Coleta os dados validados
        $nome = $this->input->post('nome', TRUE);
        $email = $this->input->post('email', TRUE);
        $telefone = $this->input->post('telefone', TRUE);
        $assunto = $this->input->post('assunto', TRUE);
        $mensagem = $this->input->post('mensagem', TRUE);

        // Tenta enviar o email
        if ($this->enviar_email($nome, $email, $telefone, $assunto, $mensagem)) {
            // Atualiza contador de rate limiting
            $this->update_rate_limit();

            $this->session->set_flashdata('success', 'Mensagem enviada com sucesso! Entraremos em contato em breve.');
            redirect('contato');
        } else {
            // Log do erro para o administrador
            log_message('error', 'Falha ao enviar email de contato - De: ' . $email);

            $this->session->set_flashdata('error', 'Desculpe, ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde.');
            redirect('contato');
        }
    }

    /**
     * Envia o email de contato
     *
     * @param string $nome Nome do remetente
     * @param string $email Email do remetente
     * @param string $telefone Telefone do remetente
     * @param string $assunto Assunto da mensagem
     * @param string $mensagem Corpo da mensagem
     * @return bool True se enviou com sucesso, False caso contrário
     */
    private function enviar_email($nome, $email, $telefone, $assunto, $mensagem) {
        // Configuração do email
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => getenv('SMTP_HOST') ?: 'smtp.gmail.com',
            'smtp_port' => getenv('SMTP_PORT') ?: 587,
            'smtp_user' => getenv('SMTP_USER'),
            'smtp_pass' => getenv('SMTP_PASS'),
            'smtp_crypto' => 'tls',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
            'wordwrap' => TRUE
        );

        $this->email->initialize($config);

        // Define remetente e destinatário
        $from_email = getenv('SMTP_FROM_EMAIL') ?: 'contato@tafsportsbr.com';
        $from_name = getenv('SMTP_FROM_NAME') ?: 'TAF Sports - Formulário de Contato';

        $this->email->from($from_email, $from_name);
        $this->email->reply_to($email, $nome);
        $this->email->to($from_email);
        $this->email->subject('Formulário de Contato: ' . $assunto);

        // Corpo do email em HTML
        $body = $this->load->view('emails/contato', array(
            'nome' => $nome,
            'email' => $email,
            'telefone' => $telefone,
            'assunto' => $assunto,
            'mensagem' => nl2br(html_escape($mensagem))
        ), TRUE);

        $this->email->message($body);

        // Tenta enviar
        return $this->email->send();
    }

    /**
     * Verifica rate limiting (máximo 3 emails por hora)
     *
     * @return bool True se pode enviar, False se excedeu o limite
     */
    private function check_rate_limit() {
        $session_key = 'contact_rate_limit';
        $max_emails = 3;
        $time_window = 3600; // 1 hora em segundos

        $rate_data = $this->session->userdata($session_key);

        if (!$rate_data) {
            return TRUE;
        }

        // Limpa registros antigos
        $current_time = time();
        $rate_data = array_filter($rate_data, function($timestamp) use ($current_time, $time_window) {
            return ($current_time - $timestamp) < $time_window;
        });

        return count($rate_data) < $max_emails;
    }

    /**
     * Atualiza o contador de rate limiting
     */
    private function update_rate_limit() {
        $session_key = 'contact_rate_limit';
        $rate_data = $this->session->userdata($session_key) ?: array();

        $rate_data[] = time();

        $this->session->set_userdata($session_key, $rate_data);
    }
}
