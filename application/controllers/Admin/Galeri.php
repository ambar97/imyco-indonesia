<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_galery');
	}
	public function index(){
		$data['galery'] = $this->M_galery->tampildatagalery('Foto')->result();
		$this->load->view("admin/v_galery",$data);
	
	}
	function simpanfoto(){
		if(isset($_POST['btnSimpan'])){
          $config = array('upload_path' => './gallery/Galeri/',
                  'allowed_types' => 'gif|jpg|png|jpeg'
                  );
          $this -> load -> library ('upload',$config);
          if ($this->upload->do_upload('link'))
        {
            $upload_data = $this -> upload -> data ();
            $judul = $this -> input -> post('jdlGalery');
            $foto = "gallery/Galeri/".$upload_data['file_name'];
        $data = array(
        'jdlGaleri' => $judul,
        'gambar_galeri' => $foto
        );
        $insert_data = $this->db->insert('galeri',$data);
      }
      if ($insert_data >= 0) {
        $this->session->set_flashdata("Pesan", $this->core->alert_succes("Data Berhasil di simpan"));
        redirect(base_url().'admin/Galery');
       } else{
        $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di simpan"));
        redirect(base_url().'admin/Galery');
       }
    }else{
      $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di simpan, cek gambar"));
    }





		$dir 						= 'galery/';
		$config['upload_path']      = 'galery/';
		$config['allowed_types']    = 'jpg|png|jpeg';
		$config['max_size']         = '2048';
		$this->load->library('upload', $config);
		$this->upload->initialize($config); 
		if (!$this->upload->do_upload('link')) {
			echo $this->upload->display_errors();
		}else{
			$simpanvideo = array(
				'jdlGalery' 	=> $this->input->post('jdlGalery'),
				'id_Galery'		=> $this->session->userdata("id_Galery"),	
				'kategori'		=> $this->input->post('kategori'),
				'action' 		=> $this->input->post('action'),
				'link'			=> $dir.$this->upload->data('link'),
			);
			$this->db->insert('galery',$simpanvideo);
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