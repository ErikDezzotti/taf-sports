<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller
{

public function __construct(){
  parent::__construct();
}
    
    public function login()
    {
       if($this->session->userdata('ip')=="") {
        $this->load->view('login');
    } else {
        redirect("painel/home");
    }
    }
    
     public function painel()
    {
        if($this->session->userdata('ip')!="") {
          $dados["pagina"]="geral";
          $dados["nome"]=$this->session->userdata('nome');
          $dados["funcao"]=$this->session->userdata('funcao');
          $dados["foto"]=$this->session->userdata('foto');
        $this->load->view('painel_home',$dados);
        $this->load->view('painel_home_interna',$dados);
        } else {
             redirect("");
        }
    }
   


    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
