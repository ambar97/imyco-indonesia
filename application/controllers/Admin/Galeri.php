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
          'jdlGalery' => $judul,
          'kategori'  => 'Foto',
          'link'      => $foto,
          'action'    => 2
        );
                // die(var_dump($data));
        $insert_data = $this->db->insert('galery',$data);

      }
      if ($insert_data > 0) {
        // $this->session->set_flashdata("Pesan", $this->core->alert_succes("Data Berhasil di simpan"));
        redirect(base_url().'admin/Galeri?sukses');
      } else{
        // $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di simpan"));
        redirect(base_url().'admin/Galeri?gagal');
      }
    }else{          
      // $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di simpan, cek gambar"));
    	redirect(base_url().'admin/Galeri');
    }
  }

  function tampildatafoto(){
  $idGalery = $this->uri->segment(3);
  $data['galery'] = $this->M_galery->tampildatagalery('Foto')->result();
  $this->load->view("admin/v_galery",$data);
  }

  function editfotosave(){
    if(isset($_POST['btnSimpan'])){
      $config = array('upload_path' => './gallery/Galeri/',
        'allowed_types'             => 'gif|jpg|png|jpeg',
        'max_size'                  => '2048'
      );
      $this -> load -> library ('upload',$config);
      if ($this->upload->do_upload('link'))
      {
        $id  = $this->input->post('idGalery');
        $upload_data  = $this -> upload -> data ();
        $user         = $this->session->userdata('idAdmin');
        $judul        = $this -> input -> post('jdlGalery');
        $foto         = "gallery/Galeri/".$upload_data['file_name'];
        $data         = array(
          'jdlGalery' => $judul,
          'kategori'  => 'Foto',
          'link'      => $foto,
          'action'    => 2
        );
                // die(var_dump($data));
        $this->db->where('idGalery',$id);
        $insert_data = $this->db->update('galery',$data);

      }
      if ($insert_data > 0) {

        // $this->session->set_flashdata("Pesan", $this->core->alert_succes("Data Berhasil di simpan"));
        redirect(base_url().'admin/Galeri');
      } else{
        // $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di simpan"));
        redirect(base_url().'admin/Galeri?gagal');
      }
    }else{
      // $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di simpan, cek gambar"));
      redirect(base_url().'admin/Galeri');
    }
  }
  function delete(){
    $where = array('idGalery' => $idGalery);
    $this->M_galery->delete($where,'galery');
    redirect('admin/Galeri');

  }
}