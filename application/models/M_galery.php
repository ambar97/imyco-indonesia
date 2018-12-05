<?php
/**
*
*/
	class M_galery extends CI_Model{
		public function select($table){
			return $this->db->get($table);
		}
		public function selectlimit($table){
			$this->db->order_by('','');
			$this->db->limit();
			return $this->db->get($table);
		}
		public function selectwhere($table,$where){
			return $this->db->get_where($table, $where);
		}
		function delete($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}
		public function update($table,$data,$where){
			$this->db->update($table,$data,$where);
		}
		public function insert($table,$data){
			$this->db->insert($table,$data);
		}
		public function insert2($table,$data){
			$this->db->insert($table,$data);
			return $this->db->insert_id();
		}
		function cek_login($table,$where){
			return $this->db->get_where($table,$where);
		}
	}
