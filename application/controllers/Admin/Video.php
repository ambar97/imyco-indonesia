<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {
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
		if (isset($_POST['btnSimpan'])) {
			$user         = $this->session->userdata('idAdmin');
			$j_galery= $this -> input -> post('jdlGalery');
			$lk_galery= $this -> input -> post('lnkGalery');
			$data = array(
				'jdlGalery' => $j_galery,
				'kategori'  => 'Video',
				'link'      => $lk_galery,
				'action'    => 2
			);
			 $insert_data = $this->db->insert('galery',$data);

      }
      if ($insert_data > 0) {
        // $this->session->set_flashdata("Pesan", $this->core->alert_succes("Data Berhasil di simpan"));
        redirect(base_url().'admin/Video');
      }else{
        // $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di simpan"));
        redirect(base_url().'admin/Video');
    }
}

	function editvideo(){
		if (isset($_POST['btnSimpan'])) {
			$idGalery = $this->input->post('idVideo');
			$where['idGalery']=$idGalery;
			$user         = $this->session->userdata('idAdmin');
			$j_galery= $this -> input -> post('jdlGalery');
			$lk_galery= $this -> input -> post('link');
			$data = array(
				'jdlGalery' => $j_galery,
				'kategori'  => 'Video',
				'link'      => $lk_galery,
				'action'    => 2
			);
			 $insert_data = $this->db->update('galery',$data,$where);

      }
      if ($insert_data > 0) {
        // $this->session->set_flashdata("Pesan", $this->core->alert_succes("Data Berhasil di simpan"));
        redirect(base_url().'admin/Video');
      }else{
        // $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di simpan"));
        redirect(base_url().'admin/Video');
    }

	}
	function updatevideo(){

	}
	function delete(){
	$where = array('idGalery'=>$id);
    $hapus = $this->M_galery-> delete($where,'galery');
    if($hapus >= 0){
      // $this->session->set_flashdata("Pesan",$this->core->alert_succes("Berhasil di Hapus"));
      header('location:'.base_url('admin/Video')); 
    }else{
      header('location:'.base_url('admin/Video'));
      // $this->session->set_flashdata("Pesan",$this->core->alert_time("gagal Hapus"));
    }
		
	}
}