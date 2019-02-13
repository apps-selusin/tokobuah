<?php defined("BASEPATH") or exit("No direct script access allowed");

class Mlogin extends CI_Model {
	
	/*public function __construct() {
		parent::__construct();
	}*/
	
	public function cekemail($email) {
		$this->db->where("email", $email);
		return $this->db->get("t00_users")->row();
	}
	
	public function cekpass($email, $password) {
		$this->db->where("email", $email);
		$this->db->where("password", $password);
		return $this->db->get("t00_users")->row();
	}
	
	public function input($data) {
		$tambah = $this->db->insert("t00_users", $data);
		return $tambah;
	}
	
	public function buatsession($email) {
		$this->db->where("email", $email);
		$data = $this->db->get("t00_users");
		return $data->row();
	}
	
}