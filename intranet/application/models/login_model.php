<?php

class Login_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	

	public function login($user,$pass) {
		$this->db->where("user","$user");
        $this->db->where("pass","$pass");
		return $this->db->get('usuarios')->result();
	}

	
    
}
?>