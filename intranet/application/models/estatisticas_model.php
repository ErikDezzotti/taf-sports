<?php

class Estatisticas_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	

	public function clientes($limite) {
		$this->db->order_by("apelido","ASC");
		return $this->db->get('atletas',$limite)->result();
	}

	public function cliente($id) {
		$this->db->where("id","$id");
		return $this->db->get('atletas')->result();
	}

	public function buscaClientes($busca) {
		$this->db->like("apelido","$busca");
		$this->db->order_by("apelido","ASC");
		return $this->db->get('atletas')->result();
	}

	public function estatisticas($id) {
		$this->db->where("idCliente","$id");
		$this->db->order_by("ano","DESC");
		return $this->db->get('estatisticas')->result();
	}

	public function estatistica($id) {
		$this->db->where("id","$id");
		return $this->db->get('estatisticas')->result();
	}

	public function adicionaStat($cliente,$jogos,$gols,$assistencias,$vitorias,$empates,$derrotas,$ano,$clube) {


$data = array(
   'idCliente' => "$cliente" ,
   'jogos' => "$jogos",
   'gols' => "$gols",
   'assistencias' => "$assistencias",
   'vitorias' => "$vitorias",
   'empates' => "$empates",
   'derrotas' => "$derrotas",
   'ano' => "$ano",
   'clube' => "$clube"
);

$this->db->insert('estatisticas', $data); 
	}


public function editaStat($id,$cliente,$jogos,$gols,$assistencias,$vitorias,$empates,$derrotas,$ano,$clube) {
$data = array(
   'idCliente' => "$cliente" ,
   'jogos' => "$jogos",
   'gols' => "$gols",
   'assistencias' => "$assistencias",
   'vitorias' => "$vitorias",
   'empates' => "$empates",
   'derrotas' => "$derrotas",
   'ano' => "$ano",
   'clube' => "$clube"
);
$this->db->where('id', $id);
$this->db->update('estatisticas', $data); 
	}


public function excluiStat($id) {
		$this->db->delete('estatisticas', array('id' => $id)); 
	}








public function tecnicos($limite) {
		$this->db->order_by("nome","ASC");
		return $this->db->get('tecnicos',$limite)->result();
	}

	public function tecnico($id) {
		$this->db->where("id","$id");
		return $this->db->get('tecnicos')->result();
	}

	public function buscaTecnicos($busca) {
		$this->db->like("nome","$busca");
		$this->db->order_by("nome","ASC");
		return $this->db->get('tecnicos')->result();
	}

	public function estatisticas_tec($id) {
		$this->db->where("idCliente","$id");
		$this->db->order_by("ano","DESC");
		return $this->db->get('estatisticas_tec')->result();
	}

	public function estatistica_tec($id) {
		$this->db->where("id","$id");
		return $this->db->get('estatisticas_tec')->result();
	}

	public function adicionaStatTec($cliente,$jogos,$vitorias,$empates,$derrotas,$ano,$clube) {


$data = array(
   'idCliente' => "$cliente" ,
   'jogos' => "$jogos",
   'vitorias' => "$vitorias",
   'empates' => "$empates",
   'derrotas' => "$derrotas",
   'ano' => "$ano",
   'clube' => "$clube"
);

$this->db->insert('estatisticas_tec', $data); 
	}


public function editaStatTec($id,$cliente,$jogos,$vitorias,$empates,$derrotas,$ano,$clube) {
$data = array(
   'idCliente' => "$cliente" ,
   'jogos' => "$jogos",
   'vitorias' => "$vitorias",
   'empates' => "$empates",
   'derrotas' => "$derrotas",
   'ano' => "$ano",
   'clube' => "$clube"
);
$this->db->where('id', $id);
$this->db->update('estatisticas_tec', $data); 
	}


public function excluiStatTec($id) {
		$this->db->delete('estatisticas_tec', array('id' => $id)); 
	}





}
?>