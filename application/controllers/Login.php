<?php defined("BASEPATH") or exit("No direct script access allowed");

class Login extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata("id")) {redirect("home");}
	}
	
	public function index() {
		$this->load->helper(array("form", "url"));
		$this->load->library("form_validation");
		$this->form_validation->set_rules("password", "Password", "required");
		$this->form_validation->set_rules("email", "Email", "required|is_unique[users.email]");
		if ($this->form_validation->run() == false) {
			$this->load->view("form_login");
		}
		else {
			redirect("login/masuk");
		}
	}
	
	public function masuk() {
		$email = $this->input->post("email");
		$password = md5($this->input->post("password"));
		$cek = $this->mlogin->cekpass($email, $password);
		$hasil = count($cek);
		if ($hasil > 0) {
			$id = $cek->id;
			$level = $cek->level;
			$email = $cek->email;
			$this->session->set_userdata("id", $id);
			$this->session->set_userdata("email", $email);
			redirect("home");
		}
		else {
			$this->session->set_flashdata("error", "Username atau Password salah !");
			redirect("login");
		}
	}
	
}