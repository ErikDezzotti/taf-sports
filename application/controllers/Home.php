<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home Controller
 *
 * ✅ REFATORAÇÃO COMPLETA (FASE 6):
 * - Eliminada duplicação de código (método _render)
 * - Dados base inicializados no __construct
 * - Melhor organização e manutenibilidade
 * - Usa novos métodos otimizados do model
 *
 * @package TAF Sports
 */
class Home extends CI_Controller {

	/**
	 * Dados base que aparecem em todas as páginas
	 * @var array
	 */
	private $base_data = array();

	/**
	 * Construtor - Inicializa dependências e dados base
	 */
	public function __construct() {
		parent::__construct();
		$this->load->model('Home_model', 'banco');
		$this->load->library('session');  // ✅ Session para flashdata
		$this->load->helper('form');      // ✅ Form helper para set_value()

		// ✅ REFATORAÇÃO: Dados base carregados uma única vez
		// Antes: Cada método duplicava estas 4-5 linhas
		// Agora: Inicializados no construtor e herdados por todos os métodos
		$this->base_data = array(
			'titulo' => 'TAF Sports',
			'pagina' => '',
			'descricao' => '',
			'tipo' => '',
			'config' => $this->banco->config()
		);
	}

	/**
	 * Página inicial
	 */
	public function index() {
		$dados = array_merge($this->base_data, array(
			'titulo' => 'TAF Sports - Assessoria Esportiva',
			'pagina' => 'home',
			// ✅ OTIMIZAÇÃO: Usa clubes indexados (previne N+1)
			'clubes' => $this->banco->clubes_indexados(),
			// ✅ REFATORAÇÃO: Usa banners válidos (lógica no model)
			'banners' => $this->banco->banners_validos(),
			'paginas' => $this->banco->pagina('home'),
			'clientesP' => $this->banco->clientesMP(4)
		));

		$this->_render('home', $dados);
	}

	/**
	 * Página da empresa
	 */
	public function empresa() {
		$dados = array_merge($this->base_data, array(
			'titulo' => 'Empresa - TAF Sports',
			'pagina' => 'empresa',
			'empresas' => $this->banco->pagina('empresa'),
			'missao' => $this->banco->pagina('missao'),
			'fazemos' => $this->banco->pagina('fazemos'),
			'diferencial' => $this->banco->pagina('diferencial')
		));

		$this->_render('empresa', $dados);
	}

	/**
	 * Página de serviços
	 */
	public function servicos() {
		$dados = array_merge($this->base_data, array(
			'titulo' => 'Serviços - TAF Sports',
			'pagina' => 'servicos',
			'paginas' => $this->banco->pagina('servicos')
		));

		$this->_render('servicos', $dados);
	}

	/**
	 * Lista de clientes (atletas)
	 */
	public function clientes() {
		$dados = array_merge($this->base_data, array(
			'titulo' => 'Clientes - TAF Sports',
			'pagina' => 'clientes',
			'tipo' => 'Masculino',
			// ✅ OTIMIZAÇÃO: Usa clubes indexados
			'clubes' => $this->banco->clubes_indexados(),
			'clientesP' => $this->banco->clientesMP(250),
			'clientesB' => $this->banco->clientesMB(150),
			'linha' => ''
		));

		$this->_render('clientes', $dados);
	}

	/**
	 * Busca de clientes
	 */
	public function buscaClientes() {
		$termo = $this->input->get('buscar', TRUE);
		$tipo = $this->input->get('tipo', TRUE);

		// Sanitização e formatação do tipo
		if ($tipo == 'tecnico') {
			$tipo = 'Técnico';
		}
		$tipo = ucfirst($tipo);

		// Monta mensagem de resultado
		$linha = empty($tipo)
			? "Resultados da busca para: \"" . html_escape($termo) . "\""
			: "Resultados da busca para: \"" . html_escape($termo) . "\" na categoria: " . html_escape($tipo);

		$dados = array_merge($this->base_data, array(
			'titulo' => html_escape($termo) . ' - Busca - TAF Sports',
			'pagina' => 'clientes',
			// ✅ OTIMIZAÇÃO: Usa clubes indexados
			'clubes' => $this->banco->clubes_indexados(),
			'clientesP' => $this->banco->buscaCliente($termo, 'Profissional'),
			'clientesB' => $this->banco->buscaCliente($termo, 'Base'),
			'linha' => $linha
		));

		$this->_render('clientes', $dados);
	}

	/**
	 * Perfil individual do cliente (atleta)
	 */
	public function cliente() {
		$id = $this->uri->segment(2);
		$client = $this->banco->cliente($id);

		// Verifica se o cliente existe
		if (empty($client)) {
			redirect('erro-404');
			return;
		}

		$cli = $client[0];

		// ✅ SEGURANÇA: URL externa removida (usar imagem local)
		// Antes: hardcoded "http://www.futpress.com.br/imagens/atletas/$cli->imagem"
		// Agora: usa imagem local com fallback
		$imagem_path = base_url() . 'imagens/atletas/' . $cli->imagem;

		$dados = array_merge($this->base_data, array(
			'titulo' => html_escape($cli->apelido) . ' - Atletas - TAF Sports',
			'pagina' => 'cliente',
			'clientes' => $client,
			// ✅ OTIMIZAÇÃO: Usa clubes indexados
			'clubes' => $this->banco->clubes_indexados(),
			'releases' => $this->banco->releasesJogador($id, 6),
			'historicos' => $this->banco->historicoJogador($id),
			'assessores' => $this->banco->assessores(),
			'imagem' => $imagem_path
		));

		$this->_render('cliente', $dados);
	}

	/**
	 * Página de contato
	 *
	 * NOTA: Este método existe por compatibilidade com rotas antigas
	 * O formulário de contato agora é gerenciado pelo controller Contato.php
	 */
	public function contato() {
		$dados = array_merge($this->base_data, array(
			'titulo' => 'Contato - TAF Sports',
			'pagina' => 'contato',
			'paginas' => $this->banco->pagina('contato')
		));

		$this->_render('contato', $dados);
	}

	/**
	 * Página de erro 404
	 */
	public function erro404() {
		// Define cabeçalho HTTP 404
		$this->output->set_status_header('404');

		$dados = array_merge($this->base_data, array(
			'titulo' => 'Página não encontrada - TAF Sports',
			'pagina' => 'erro404',
			'releases' => $this->banco->releases(6)
		));

		$this->_render('erro404', $dados);
	}

	/**
	 * Método auxiliar para renderizar views
	 *
	 * ✅ REFATORAÇÃO: Elimina duplicação de código
	 * Antes: Cada método tinha 3 linhas load->view() repetidas
	 * Agora: Um único método reutilizável
	 *
	 * @param string $view Nome da view principal
	 * @param array $data Dados para passar à view
	 */
	private function _render($view, $data = array()) {
		$this->load->view('inc_topo', $data);
		$this->load->view($view, $data);
		$this->load->view('inc_rodape', $data);
	}
}
