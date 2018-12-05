<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_galery');
	}
	public function index(){
		$data['galery'] = $this->M_galery->tampildatagalery('Foto')->result();
		$this->load->view("admin/v_produk",$data);
	
	}

}