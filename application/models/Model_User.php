<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
	public function addUser($data)
	{
		$this->db->insert('user',$data);
		$id = $this->db->insert_id();
		echo '<script>console.log('.json_encode($id).')</script>';
		return $id;
	}

	public function getUser($where){
		$query = $this->db->get_where('user',$where);
		return $query->row();
	}

	public function addDate($data)
	{
		$this->db->insert('user',$data);
		return $this->db->affected_rows();

	}
}
