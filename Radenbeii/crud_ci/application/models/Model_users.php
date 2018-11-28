<?php
//Model_data.php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_users extends CI_Model{

	
	public function simpan($post){
	
		$username = $this->db->escape($post['username']);
		$password = $this->db->escape($post['password']);
		
		$sql = $this->db->query("
			INSERT INTO 
			tb_user 
			VALUES (NULL, $username, $password)");
		if($sql)
			return true;
		return false;
	}



public function load_users(){
		$sql = $this->db->query("SELECT * FROM tb_user");
		return $sql->result_array();
	}
	
	
}