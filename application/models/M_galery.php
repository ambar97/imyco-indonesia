<?php
/**
*
*/
	class M_galery extends CI_Model{

		function tampildatagalery($id){
			$where  = $this->db->where('kategori',$id);
			$simpangambar = $this->db->get('galery');
 			return $simpangambar;
		}
		function tampildatavideo($id){
			$where  = $this->db->where('kategori',$id);
			$simpangambar = $this->db->get('galery');
 			return $simpangambar;
		}

	}
