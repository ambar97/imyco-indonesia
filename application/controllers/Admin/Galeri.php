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
        'allowed_types'             => 'gif|jpg|png|jpeg',
        'max_size'                  => '2048'
      );
      $this -> load -> library ('upload',$config);
      if ($this->upload->do_upload('link'))
      {
        $upload_data  = $this -> upload -> data ();
        $user         = $this->session->userdata('idAdmin');
        $judul        = $this -> input -> post('jdlGalery');
        $foto         = "gallery/Galeri/".$upload_data['file_name'];
        $data         = array(
          'idGalery'=>"",
          'jdlGalery' => $judul,
          'kategori'  => 'Foto',
          'foto'      => $foto,
          'link'		=>'',
          'action'    => $user
        );
                // die(var_dump($data));
        $insert_data = $this->db->insert('galery',$data);

      }
      if ($insert_data > 0) {
        // $this->session->set_flashdata("Pesan", $this->core->alert_succes("Data Berhasil di simpan"));
        redirect(base_url().'Admin/Galeri');
      } else{
        // $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di simpan"));
        redirect(base_url().'Admin/Galeri');
      }
    }else{          
      // $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di simpan, cek gambar"));
    	redirect(base_url().'Admin/Galeri');
    }
  }

  function editfotosave(){
  	$config = array('upload_path' => './gallery/Galeri/',
      'allowed_types' => 'gif|jpg|png|jpeg'
    );
    $this -> load -> library ('upload',$config);
    $this->upload->do_upload('link');
    $upload_data = $this -> upload -> data ();
    $idGalery = $this->input->post('idGambar');
        $where['idGalery']=$idGalery;
        $upload_data  = $this -> upload -> data ();
        $user         = $this->session->userdata('idAdmin');
        $judul        = $this -> input -> post('jdlGalery');
        $foto         = "gallery/Galeri/".$upload_data['file_name'];
    if ($upload_data['file_name'] == null) {
      $data = array(
          'jdlGalery' => $judul,
          'link'		=> ''
        );
    }else{
      $data= array(
          'jdlGalery' => $judul,
          'foto'      => $foto
        );
    }            
    $update_data = $this->db->update('galery',$data,$where);
    if ($update_data >= 0) {
      // $this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di Perbarui"));
      redirect(base_url().'Admin/Galeri');
    } else{
      // $this->session->set_flashdata("Pesan",$this->core->alert_time("Data Berhasil di Perbarui"));
      redirect(base_url().'Admin/Galeri');
    }
  }
  public function d_galeri($id){
    $where = array('idGalery'=>$id);
    $hapus = $this->Umum->delete($where,'galery');
    if($hapus >= 0){
      // $this->session->set_flashdata("Pesan",$this->core->alert_succes("Berhasil di Hapus"));
      header('location:'.base_url('Admin/Galeri')); 
    }else{
      header('location:'.base_url('Admin/Galeri'));
      // $this->session->set_flashdata("Pesan",$this->core->alert_time("gagal Hapus"));
    }
  }
}