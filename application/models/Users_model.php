<?php
class Users_model extends CI_Model {

	public function getUsers()
	{
		$query = $this->db->get('tbl_users');
		if ($query->num_rows() > 0) {
		 	return $query->result();
		 	die($query->result());
		 } 
		 die("asd");
	}
	public function check_login_vaildate($data)
	{
		$this->db->where('user_email',$data['user_email']);
		$this->db->where('user_password',md5($data['user_password']));
		$query = $this->db->get('tbl_users');

		if ($query->num_rows() == 1) { 
			return $query->row();
		}
	}
	public function createUser($data)
	{ 
		return $this->db->insert('tbl_users',$data);
	}
	public function getSelectUsers($id)
	{
		$query = $this->db->get_where('tbl_users', array('user_id' => $id));
		if ($query->num_rows() > 0) {
		 	return $query->result();
		 } 
	}
	public function updateUser($data,$id)
	{
		return $this->db->where('user_id', $id)
						->update('tbl_users',$data);
	}
	public function deleteSelectUsers($id){
		return $this->db->where('user_id', $id)
						->delete('tbl_users');
	}
	public function check_if_email_exist($email)
	{
		$this->db->where('user_email',$email);
		$result = $this->db->get('tbl_users');
		if ($result->num_rows() > 0) {
			return FALSE;
		}
		else
			return TRUE;
	}
} 