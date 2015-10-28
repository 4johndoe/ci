<?php 

class Membership_model extends CI_Model
 {
 	function validate()
 	{
 		var_dump($this->input->post('username'));
 		var_dump(md5($this->input->post('password')));
 		$this->db->where('username', $this->input->post('username'));
 		$this->db->where('password', md5($this->input->post('password')));

 		// $query = $this->db->get('membership');
 		$query = $this->db->get('membership');
 		// var_dump($query->num_rows);

 		if ($query->num_rows == 1) {
 			return true;
 		}
 	}	
 }