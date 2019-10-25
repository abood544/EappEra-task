<?php
class Posts_model extends CI_Model {

	public function get_post_q()
	{
	    $this->db->from('tbl_posts');
		$this->db->order_by("post_publish_date", "DESC");
		$this->db->order_by("post_publish_time", "DESC");
		$query = $this->db->get(); 

		if ($query->num_rows() > 0) {
		 	return $query->result();
		 } 
	}
	public function create_post_q($data){
		return $this->db->insert('tbl_posts',$data);
	}
}