<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller
{
    
    public function __construct() {
	parent::__construct();
	$this->load->model('Login_model', 'banco');
	}

    
    public function index()
    {
        $user=$this->input->post("user");
        $pass=$this->input->post("pass");
        $pass=md5($pass);
        
        $resultados=$this->banco->login($user,$pass);
        $x=0;
        foreach($resultados as $result) { $x="1"; $nome=$result->nome; $funcao=$result->funcao; $foto=$result->imagem; }
       
        if($x=="1") { 
            $dados = array(
                   'user'  => $user,
                   'nome'  => $nome,
                   'funcao' => $funcao,
                   'foto' => $foto,
                    'ip'  => $_SERVER["REMOTE_ADDR"],
                   'logged_in' => TRUE
               );
            $this->session->set_userdata($dados);
            
            redirect("painel/home"); 
        
        } else { redirect(""); }
       
    }
    
     public function logoff()
    {
        $this->session->sess_destroy();
        redirect("");
    }
    
   
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
