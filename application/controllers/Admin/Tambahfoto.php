<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambahfoto extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_galery');
	}
	public function index(){
		$data['galery'] = $this->M_galery->tampildatagalery()->result();
		$this->load->view("admin/v_galery");
	
	}
	function simpanfoto(){
		$dir 						= 'assets/images_upload/foto_forum/';
		$config['upload_path']      = 'assets/images_upload/foto_forum/';
		$config['allowed_types']    = 'jpg|png|jpeg';
		$config['max_size']         = '2048';
		$this->load->library('upload', $config);
		$this->upload->initialize($config); 
		if (!$this->upload->do_upload('link')) {
			echo $this->upload->display_errors();
		}else{
			$simpangambar = array(
				'jdlGalery' 	=> $this->input->post('jdlGalery'),
				'id_Galery'		=> $this->session->userdata("id_Galery"),	
				'kategori'		=> $this->input->post('kategori'),
				'action' 		=> $this->input->post('action'),
				'link'			=> $dir.$this->upload->data('link'),
			);
			$this->db->insert('galery',$simpangambar);
				redirect('Admin/v_galery');
		}
	}
	function editfoto(){

	}
	function updatefoto(){

	}
	function delete(){
		
	}
}