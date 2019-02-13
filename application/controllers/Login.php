<?php defined("BASEPATH") or exit("No direct script access allowed");

class Login extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model("users_model");
	}
	
	public function index() {
		//$this->load->view("halaman_login");
		$this->load->view("login");
	}
	
	public function proses_login() {
		//echo "1"; die(); exit;
		$user = $this->input->post("username");
		$pass = $this->input->post("password");
		
		$login = $this->users_model->cek_user($user, $pass);
		
		if (!empty($login)) {
			// login berhasil
			$this->session->set_userdata($login);
			redirect(site_url("admin"));
		}
		else {
			// login gagal
			$this->session->set_flashdata("gagal", "Username dan Password Salah !");
			redirect(site_url("login"));
		}
	}
}