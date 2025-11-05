<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
	parent::__construct();
	$this->load->model('Home_model', 'banco');
	}
	
	public function index()
	{
		$dados["titulo"]="TAF Sports - Assessoria Esportiva";
		$dados["pagina"]="home";
		$dados["descricao"]="";
		$dados["tipo"]="";
		$dados["config"]=$this->banco->config();
		$dados["clubes"]=$this->banco->clubes();
		$dados["banners"]=$this->banco->banners();
		$dados["paginas"]=$this->banco->pagina("home");
		$dados["clientesP"]=$this->banco->clientesMP(4);
		$this->load->view('inc_topo',$dados);
		$this->load->view('home',$dados);
		$this->load->view('inc_rodape',$dados);
	}

	public function empresa()
	{
		$dados["titulo"]="Empresa - TAF Sports";
		$dados["pagina"]="empresa";
		$dados["descricao"]="";
		$dados["tipo"]="";
		$dados["config"]=$this->banco->config();
		$dados["empresas"]=$this->banco->pagina("empresa");
		$dados["missao"]=$this->banco->pagina("missao");
		$dados["fazemos"]=$this->banco->pagina("fazemos");
		$dados["diferencial"]=$this->banco->pagina("diferencial");
		$this->load->view('inc_topo',$dados);
		$this->load->view('empresa',$dados);
		$this->load->view('inc_rodape',$dados);
	}

	public function servicos()
	{
		$dados["titulo"]="Serviços - TAF Sports";
		$dados["pagina"]="servicos";
		$dados["descricao"]="";
		$dados["tipo"]="";
		$dados["config"]=$this->banco->config();
		$dados["paginas"]=$this->banco->pagina("servicos");
		$this->load->view('inc_topo',$dados);
		$this->load->view('servicos',$dados);
		$this->load->view('inc_rodape',$dados);
	}


	public function clientes()
	{
		$dados["titulo"]="Clientes - TAF Sports";
		$dados["pagina"]="clientes";
		$dados["descricao"]="";
		$dados["tipo"]="Masculino";
		$dados["config"]=$this->banco->config();
		$dados["clubes"]=$this->banco->clubes();
		$dados["clientesP"]=$this->banco->clientesMP(250);
		$dados["clientesB"]=$this->banco->clientesMB(150);

		$dados["linha"]="";
		$this->load->view('inc_topo',$dados);
		$this->load->view('clientes',$dados);
		$this->load->view('inc_rodape',$dados);
	}



	public function buscaClientes()
	{
		$termo=$this->input->get('buscar');
		$tipo=$this->input->get('tipo');
		
		$dados["titulo"]="Resultado da busca para $termo - TAF Sports";
		$dados["pagina"]="clientes";
		$dados["descricao"]="";
		$dados["tipo"]="";
		$dados["config"]=$this->banco->config();
		$dados["clubes"]=$this->banco->clubes();
		$dados["clientesP"]=$this->banco->buscaCliente($termo,"Profissional");
		$dados["clientesB"]=$this->banco->buscaCliente($termo,"Base");
		if($tipo=="tecnico") { $tipo="Técnico"; }
		$tipo=ucfirst($tipo);
		if($tipo=="") {
	
		$dados["linha"]="Resultados da busca para: \"$termo\""; } else {
		$dados["linha"]="Resultados da busca para: \"$termo\" na categoria: $tipo";
		}
		$this->load->view('inc_topo',$dados);
		$this->load->view('clientes',$dados);
		$this->load->view('inc_rodape',$dados);
	}

	public function cliente()
	{
		$id=$this->uri->segment(2);
		$client=$this->banco->cliente($id);

		foreach ($client as $cli) {

		}
		if(isset($cli->id)) { 
		$dados["titulo"]="$cli->apelido - Atletas - TAF Sports";
		$dados["pagina"]="cliente";
		$dados["descricao"]="";
		$dados["tipo"]="";
		$dados["config"]=$this->banco->config();
		$dados["clientes"]=$this->banco->cliente($id);
		$dados["clubes"]=$this->banco->clubes();
		$dados["releases"]=$this->banco->releasesJogador($id,6);
		$dados["historicos"]=$this->banco->historicoJogador($id);
		$dados["assessores"]=$this->banco->assessores();
		$dados["imagem"]="http://www.futpress.com.br/imagens/atletas/$cli->imagem";
		$this->load->view('inc_topo',$dados);
		$this->load->view('cliente',$dados);
		$this->load->view('inc_rodape',$dados);
		} else {
		redirect("erro-404");
	}
	}

	public function contato()
	{
		$dados["titulo"]="Contato - TAF Sports";
		$dados["pagina"]="contato";
		$dados["descricao"]="";
		$dados["tipo"]="";
		$dados["paginas"]=$this->banco->pagina("contato");
		$dados["config"]=$this->banco->config();
		$this->load->view('inc_topo',$dados);
		$this->load->view('contato',$dados);
		$this->load->view('inc_rodape',$dados);
	}

	public function erro404()
	{
		$dados["titulo"]="TAF Sports";
		$dados["pagina"]="erro404";
		$dados["descricao"]="";
		$dados["tipo"]="";
		$dados["config"]=$this->banco->config();
		$dados["releases"]=$this->banco->releases(6);
		$this->load->view('inc_topo',$dados);
		$this->load->view('errors/html/error_404',$dados);
		$this->load->view('inc_rodape',$dados);
	}



}
