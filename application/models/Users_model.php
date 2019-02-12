<?php defined("BASEPATH") or exit("No direct script access allowed");

class Users_model extends CI_Model {
	
	public function cek_user($username, $password) {
		$this->db->where("email = '$username' or username = '$username'");
		$this->db->where("password", md5($password));
		$query = $this->db->get("t00_users");
		return $query->row_array();
	}
}