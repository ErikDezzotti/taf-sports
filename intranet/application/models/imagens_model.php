<?php

class Imagens_model extends CI_Model {

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


	public function tecnicos($limite) {
		$this->db->order_by("nome","ASC");
		return $this->db->get('tecnicos',$limite)->result();
	}

	public function tecnico($id) {
		$this->db->where("id","$id");
		return $this->db->get('tecnicos')->result();
	}

	public function profissionais($limite) {
		$this->db->order_by("nome","ASC");
		return $this->db->get('profissionais',$limite)->result();
	}

	public function profissional($id) {
		$this->db->where("id","$id");
		return $this->db->get('profissionais')->result();
	}

	public function clubes() {
		return $this->db->get('site_clubes')->result();
	}


	public function buscaClientes($busca) {
		$this->db->like("apelido","$busca");
		$this->db->order_by("apelido","ASC");
		return $this->db->get('atletas')->result();
	}
	public function buscaTecnicos($busca) {
		$this->db->like("nome","$busca");
		$this->db->order_by("nome","ASC");
		return $this->db->get('tecnicos')->result();
	}
	public function buscaProfissionais($busca) {
		$this->db->like("nome","$busca");
		$this->db->order_by("nome","ASC");
		return $this->db->get('profissionais')->result();
	}

	public function pastas($id) {
		$this->db->where("idCliente","$id");
		$this->db->order_by("pasta","DESC");
		return $this->db->get('imagens_pastas')->result();
	}

	public function verpasta($id) {
		$this->db->where("id",$id);
		$this->db->order_by("pasta","DESC");
		return $this->db->get('imagens_pastas')->result();
	}

	public function cadastraPasta($id,$pasta) {
		$data = array(
   'idCliente' => "$id" ,
   'pasta' => "$pasta"
);

$this->db->insert('imagens_pastas', $data); 
	}

public function editaPasta($id,$pasta) {
	$data = array(
   'pasta' => "$pasta"
            );

$this->db->where('id', $id);
$this->db->update('imagens_pastas', $data); 
}

public function editaImagens($id,$pasta,$pastaAntiga) {
	$data = array(
   'pasta' => "$pasta"
            );
$this->db->where('pasta', $pastaAntiga);
$this->db->where('id_atleta', $id);
$this->db->update('imagens_arquivos', $data); 
}

	public function inserirFotos($data = array()){
        $insert = $this->db->insert_batch('imagens_arquivos',$data);
        return $insert?true:false;
    }

    public function fotos($id) {
		$this->db->where("id_atleta","$id");
		return $this->db->get('imagens_arquivos')->result();
	}

	public function foto($id) {
		$this->db->where("id","$id");
		return $this->db->get('imagens_arquivos')->result();
	}

	public function deletarImagem($id) {
		$this->db->delete('imagens_arquivos', array('id' => $id)); 
	}

	public function deletarPasta($id) {
		$this->db->delete('imagens_pastas', array('id' => $id)); 
	}
	public function deletarImagemPastas($id,$pasta) {
$this->db->delete('imagens_arquivos', array('id_atleta' => $id, 'pasta' => $pasta)); 
}







public function tec_pastas($id) {
		$this->db->where("idCliente","$id");
		$this->db->order_by("pasta","DESC");
		return $this->db->get('imagens_tec_pastas')->result();
	}

	public function tec_verpasta($id) {
		$this->db->where("id",$id);
		$this->db->order_by("pasta","DESC");
		return $this->db->get('imagens_tec_pastas')->result();
	}

	public function tec_cadastraPasta($id,$pasta) {
		$data = array(
   'idCliente' => "$id" ,
   'pasta' => "$pasta"
);

$this->db->insert('imagens_tec_pastas', $data); 
	}

public function tec_editaPasta($id,$pasta) {
	$data = array(
   'pasta' => "$pasta"
            );

$this->db->where('id', $id);
$this->db->update('imagens_tec_pastas', $data); 
}

public function tec_editaImagens($id,$pasta,$pastaAntiga) {
	$data = array(
   'pasta' => "$pasta"
            );
$this->db->where('pasta', $pastaAntiga);
$this->db->where('id_atleta', $id);
$this->db->update('imagens_tec_arquivos', $data); 
}

	public function tec_inserirFotos($data = array()){
        $insert = $this->db->insert_batch('imagens_tec_arquivos',$data);
        return $insert?true:false;
    }

    public function tec_fotos($id) {
		$this->db->where("id_atleta","$id");
		return $this->db->get('imagens_tec_arquivos')->result();
	}

	public function tec_foto($id) {
		$this->db->where("id","$id");
		return $this->db->get('imagens_tec_arquivos')->result();
	}

	public function tec_deletarImagem($id) {
		$this->db->delete('imagens_tec_arquivos', array('id' => $id)); 
	}

	public function tec_deletarPasta($id) {
		$this->db->delete('imagens_tec_pastas', array('id' => $id)); 
	}
	public function tec_deletarImagemPastas($id,$pasta) {
$this->db->delete('imagens_tec_arquivos', array('id_atleta' => $id, 'pasta' => $pasta)); 
}
    






public function prof_pastas($id) {
		$this->db->where("idCliente","$id");
		$this->db->order_by("pasta","DESC");
		return $this->db->get('imagens_prof_pastas')->result();
	}

	public function prof_verpasta($id) {
		$this->db->where("id",$id);
		$this->db->order_by("pasta","DESC");
		return $this->db->get('imagens_prof_pastas')->result();
	}

	public function prof_cadastraPasta($id,$pasta) {
		$data = array(
   'idCliente' => "$id" ,
   'pasta' => "$pasta"
);

$this->db->insert('imagens_prof_pastas', $data); 
	}

public function prof_editaPasta($id,$pasta) {
	$data = array(
   'pasta' => "$pasta"
            );

$this->db->where('id', $id);
$this->db->update('imagens_prof_pastas', $data); 
}

public function prof_editaImagens($id,$pasta,$pastaAntiga) {
	$data = array(
   'pasta' => "$pasta"
            );
$this->db->where('pasta', $pastaAntiga);
$this->db->where('id_atleta', $id);
$this->db->update('imagens_prof_arquivos', $data); 
}

	public function prof_inserirFotos($data = array()){
        $insert = $this->db->insert_batch('imagens_prof_arquivos',$data);
        return $insert?true:false;
    }

    public function prof_fotos($id) {
		$this->db->where("id_atleta","$id");
		return $this->db->get('imagens_prof_arquivos')->result();
	}

	public function prof_foto($id) {
		$this->db->where("id","$id");
		return $this->db->get('imagens_prof_arquivos')->result();
	}

	public function prof_deletarImagem($id) {
		$this->db->delete('imagens_prof_arquivos', array('id' => $id)); 
	}

	public function prof_deletarPasta($id) {
		$this->db->delete('imagens_prof_pastas', array('id' => $id)); 
	}
	public function prof_deletarImagemPastas($id,$pasta) {
$this->db->delete('imagens_prof_arquivos', array('id_atleta' => $id, 'pasta' => $pasta)); 
}
    


}
?>