<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Login');
		// $this->load->model('alert');
	}
	public function index()
	{
		$this->load->view('vLogin');
	}
	function melbu(){
		$username = $this->input->post('username');
		$password = $this->input->post('psw');
		$where = array(
			'username' => $username,
		);
		
		$cek = $this->M_Login->cek_login("admin",$where)->num_rows();
		$cek1 = $this->M_Login->cek_login("admin",$where)->row();
		if($cek > 0){
			$hashed_password = $cek1->password;
			if(password_verify($password, $hashed_password)) {
				$data_session = array(
					'idAdmin' => $cek1->idAdmin,
					'status' => "login",

				);
				// echo "berhasil";
				$this->session->set_userdata($data_session);
				// $this->session->set_flashdata("Pesan",$this->alert->alert_succes("Login sukses"));
				redirect(base_url("Admin/Admin"));
			} else{
				echo "Gagal";
				// $this->session->set_flashdata("Pesan",$this->alert->alert_time("Password Belum terdaftar"));
			}
			
		}else{
			echo "berhasil";
			// $this->session->set_flashdata("Pesan",$this->alert->alert_time("Username & Password tidak terdaftar"));
			redirect(base_url("Login?"));
		}
	}
	function logout(){
		$this->session->sess_destroy();
		// $this->session->set_flashdata("Pesan",$this->alert->alert_succes("Login sukses"));
		redirect(base_url('Login'));
	}
}
