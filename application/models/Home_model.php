<?php

class Home_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	//RELEASES
	public function releases($limite)
	{
		$this->db->order_by("data", "DESC");
		$this->db->where("status", "Ativo");
		return $this->db->get('atletas_noticias', $limite)->result();
	}

	public function release($id)
	{
		$this->db->where("id", "$id");
		$this->db->where("status", "Ativo");
		return $this->db->get('atletas_noticias')->result();
	}

	public function releasesJogador($id, $limite)
	{
		$this->db->where("id_jogador", "$id");
		$this->db->where("status", "Ativo");
		return $this->db->get('atletas_noticias', $limite)->result();
	}

	public function buscaRelease($termo, $cliente)
	{
		if ($cliente != "") {
			$this->db->where("id_jogador", "$cliente");
		}

		$this->db->like("conteudo", "$termo");
		$this->db->like("titulo", "$termo");
		$this->db->where("status", "Ativo");
		$this->db->order_by("data", "DESC");
		return $this->db->get('atletas_noticias')->result();
	}

	//Fim RELEASES

	//CLIENTES

	public function clientes($limite)
	{
		$this->db->order_by("apelido", "ASC");
		$this->db->where("status", "Ativo");
		return $this->db->get('atletas', $limite)->result();
	}

	public function clientesFP($limite)
	{
		$this->db->order_by("apelido", "ASC");
		$this->db->where("status", "Ativo");
		$this->db->where("tipo", "Feminino");
		$this->db->where("categoria", "Profissional");
		return $this->db->get('atletas', $limite)->result();
	}

	public function clientesFB($limite)
	{
		$this->db->order_by("apelido", "ASC");
		$this->db->where("status", "Ativo");
		$this->db->where("tipo", "Feminino");
		$this->db->where("categoria", "Base");
		return $this->db->get('atletas', $limite)->result();
	}

	public function clientesMP($limite)
	{
		$this->db->order_by("apelido", "ASC");
		$this->db->where("status", "Ativo");
		$this->db->where("tipo", "Masculino");
		$this->db->where("categoria", "Profissional");
		return $this->db->get('atletas', $limite)->result();
	}

	public function clientesMB($limite)
	{
		$this->db->order_by("apelido", "ASC");
		$this->db->where("status", "Ativo");
		$this->db->where("tipo", "Masculino");
		$this->db->where("categoria", "Base");
		return $this->db->get('atletas', $limite)->result();
	}

	public function cliente($id)
	{
		$this->db->where("id", "$id");
		return $this->db->get('atletas')->result();
	}



	public function clubes()
	{
		return $this->db->get('site_clubes')->result();
	}

	/**
	 * Retorna clubes indexados por ID
	 *
	 * ✅ OTIMIZAÇÃO: Previne problema N+1 na view
	 * Antes: Loop aninhado O(n²) em home.php:222
	 * Agora: Acesso direto O(1) usando $clubes_index[$id]
	 *
	 * @return array Array associativo [id => objeto_clube]
	 */
	public function clubes_indexados()
	{
		$clubes = $this->clubes();
		$clubes_index = array();

		foreach ($clubes as $clube) {
			$clubes_index[$clube->id] = $clube;
		}

		return $clubes_index;
	}

	public function historicoJogador($id)
	{
		$this->db->where("id_jogador", "$id");
		$this->db->order_by("ano,id", "DESC");
		return $this->db->get('atletas_clubes')->result();
	}

	public function buscaCliente($termo, $tipo)
	{


		$this->db->like("apelido", "$termo");
		$this->db->like("categoria", "$tipo");
		$this->db->where("status", "Ativo");
		$this->db->order_by("apelido", "ASC");
		return $this->db->get('atletas')->result();
	}



	public function tecnicos($limite)
	{
		$this->db->order_by("nome", "ASC");
		$this->db->where("status", "Ativo");
		return $this->db->get('tecnicos', $limite)->result();
	}

	public function tecnico($id)
	{
		$this->db->where("id", "$id");
		return $this->db->get('tecnicos')->result();
	}
	public function buscaTecnico($termo, $tipo)
	{
		$this->db->like("nome", $termo);
		$this->db->where("status", "Ativo");
		if ($tipo != "") {
			$this->db->where("categoria", $tipo);
		}
		$this->db->order_by("nome", "ASC");
		return $this->db->get('tecnicos')->result();
	}


	public function profissionais($limite)
	{
		$this->db->order_by("nome", "ASC");
		$this->db->where("status", "Ativo");
		return $this->db->get('profissionais', $limite)->result();
	}

	public function profissional($id)
	{
		$this->db->where("id", "$id");
		return $this->db->get('profissionais')->result();
	}
	public function buscaProfissional($termo, $tipo)
	{
		$this->db->like("nome", $termo);
		$this->db->where("status", "Ativo");
		if ($tipo != "") {
			$this->db->where("categoria", $tipo);
		}
		$this->db->order_by("nome", "ASC");
		return $this->db->get('profissionais')->result();
	}


	public function empresas($limite)
	{
		$this->db->order_by("nome", "ASC");
		$this->db->where("status", "Ativo");
		return $this->db->get('empresas', $limite)->result();
	}
	public function buscaEmpresa($termo, $tipo)
	{
		$this->db->like("nome", $termo);
		$this->db->where("status", "Ativo");
		if ($tipo != "") {
			$this->db->where("categoria", $tipo);
		}
		$this->db->order_by("nome", "ASC");
		return $this->db->get('empresas')->result();
	}


	public function clientesclubes($limite)
	{
		$this->db->order_by("nome", "ASC");
		$this->db->where("status", "Ativo");
		return $this->db->get('clubes', $limite)->result();
	}
	public function buscaClube($termo, $tipo)
	{
		$this->db->like("nome", $termo);
		$this->db->where("status", "Ativo");
		if ($tipo != "") {
			$this->db->where("categoria", $tipo);
		}
		$this->db->order_by("nome", "ASC");
		return $this->db->get('clubes')->result();
	}

	public function estatisticas($id)
	{
		$this->db->where("idCliente", "$id");
		return $this->db->get('estatisticas')->result();
	}

	public function estatisticasTec($id)
	{
		$this->db->where("idCliente", "$id");
		return $this->db->get('estatisticas_tec')->result();
	}

	public function imagens($id)
	{
		$this->db->where("id_atleta", "$id");
		$this->db->order_by("id", "DESC");
		return $this->db->get('imagens_arquivos')->result();
	}

	public function imagensTec($id)
	{
		$this->db->where("id_atleta", "$id");
		$this->db->order_by("id", "DESC");
		return $this->db->get('imagens_tec_arquivos')->result();
	}

	public function imagensProf($id)
	{
		$this->db->where("id_atleta", "$id");
		$this->db->order_by("id", "DESC");
		return $this->db->get('imagens_prof_arquivos')->result();
	}



	//Fim CLIENTES


	//EQUIPE

	public function equipe()
	{
		$this->db->order_by("ordem", "ASC");
		$this->db->where("status", "Ativo");
		return $this->db->get('usuarios')->result();
	}

	//FIM EQUIPE


	//BANNERS

	public function banners()
	{
		$this->db->order_by("ordem", "ASC");
		$this->db->where("status", "Ativo");
		return $this->db->get('site_banners')->result();
	}

	/**
	 * Retorna apenas banners que possuem imagem válida
	 *
	 * ✅ REFATORAÇÃO: Lógica de negócio movida da view para o model
	 * Antes: file_exists() era feito diretamente na view home.php
	 * Agora: Model retorna apenas banners com imagens existentes
	 *
	 * @return array Array de objetos de banners com imagens válidas
	 */
	public function banners_validos()
	{
		$banners = $this->banners();
		$banners_validos = array();

		foreach ($banners as $banner) {
			// Verifica se a imagem desktop existe
			$caminho_desktop = FCPATH . 'imagens/banners/' . $banner->imagem;

			// Adiciona apenas se a imagem existir
			if (file_exists($caminho_desktop)) {
				$banners_validos[] = $banner;
			}
		}

		return $banners_validos;
	}

	public function subbanners()
	{
		$this->db->order_by("ordem", "ASC");
		$this->db->where("status", "Ativo");
		return $this->db->get('site_subbanners')->result();
	}

	//

	//ESTRUTURA

	public function estrutura()
	{
		$this->db->order_by("ordem", "ASC");
		return $this->db->get('site_estrutura')->result();
	}

	//

	//PORTFOLIO

	public function portfolio($tipo)
	{
		$this->db->order_by("ordem", "ASC");
		$this->db->where("categoria", "$tipo");
		return $this->db->get('site_portfolio')->result();
	}

	//

	//PAGINAS

	public function pagina($pagina)
	{
		$this->db->where("pagina", "$pagina");
		return $this->db->get('site_paginas')->result();
	}

	//

	//CONFIG

	public function config()
	{
		return $this->db->get('site_config')->result();
	}

	//

	//CASES

	public function cases()
	{
		return $this->db->get('site_cases')->result();
	}

	public function casesRand($limite)
	{
		$this->db->order_by("RAND()");
		return $this->db->get('site_cases', $limite)->result();
	}

	public function vercase($id)
	{
		$this->db->where("url", "$id");
		return $this->db->get('site_cases')->result();
	}

	//

	//OUTROS

	public function depoimentos($limite)
	{
		$this->db->order_by("ordem");
		return $this->db->get('site_depoimentos', $limite)->result();
	}

	public function assessores()
	{
		return $this->db->get('usuarios')->result();
	}

	//

}

?>