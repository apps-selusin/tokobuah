<?php defined("BASEPATH") or exit("No direct script access allowed");

class Login extends CI_Controller {
	public function index() {
		$this->load->view("halaman_login");
	}
	
	public function proses_login() {
		$user = $this->input->post("username");
		$pass = $this->input->post("password");
		
		$login = $this->user->cek_user($user, $pass);
		
		if (!empty($login)) {
			// login berhasil
			$this->session->set_userdata($login);
			redirect(base_url());
		}
		else {
			// login gagal
			$this->session->set_flashdata("gagal", "Username dan Password Salah !");
			redirect(base_url("login"));
		}
	}
}