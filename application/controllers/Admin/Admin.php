<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$this->load->view('admin/v_hadmin');
	}

	function foto(){
		$this->load->view('admin/v_galery');
	}

	function video(){
		$this->load->view('admin/v_video');
	}

}