<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_galery');
	}
	public function index()
	{
		$data['galery'] = $this->M_galery->tampildatagalery('Foto')->result();
		$this->load->view('client/vHome',$data);
	}

}
