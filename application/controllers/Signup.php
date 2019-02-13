<?php defined("BASEPATH") or exit("No direct script access allowed");

class Signup extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata("id")) {redirect("home");}
		$this->load->model("mlogin");
	}
	
	public function index() {
		$aksi = $this->input->post("daftar");
		if (isset($aksi)) {
			$this->load->helper(array("form", "url"));
			$this->load->library("form_validation");
			$this->form_validation->set_rules('password', 'password',
				'trim|required|alpha_numeric|min_length[4]|max_length[50]',
				array('required' => 'password tidak boleh kosong'));
			if ($this->form_validation->run() == FALSE) {
				$this->load->view("form_daftar");
			}
			else {
				$email = $this->input->post("email");
				$password = md5($this->input->post("password"));
				$ceke = $this->mlogin->cekemail($email);
				$hasilemail = count($ceke);
				if ($hasilemail > 0) {
					$this->session->set_flashdata("erroremail", "Email sudah terdaftar !");
					redirect("signup");
				}
				$data = array("email" => $email, "password" => $password);
				$daftar = $this->mlogin->input($data);
				if ($daftar > 0) {
					$curi = $this->mlogin->buatsession($email);
					if ($curi) {
						$id = $curi->id;
						$nama = $curi->user_name;
					}
					$this->session->set_userdata("id", $id);
					$this->session->set_userdata("email", $email);
					redirect("home");
				}
			}
		}
		else {
			$this->load->view("form_daftar");
		}
	}
	
}