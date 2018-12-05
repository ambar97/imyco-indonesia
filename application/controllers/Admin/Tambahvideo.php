<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambahvideo extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_galery');
	}
	public function index(){
		$data['galery'] = $this->M_galery->tampildatagalery('Video')->result();
		$this->load->view("admin/v_video",$data);
	
	}
	function simpanvideo(){
		$dir 						= 'galery/';
		$config['upload_path']      = 'galery/';
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
				redirect('Admin/v_video	');
		}
	}
	function editvideo(){

	}
	function updatevideo(){

	}
	function delete(){
		
	}
}