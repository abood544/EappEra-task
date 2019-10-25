<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Posts_model');
		$data['posts'] = $this->Posts_model->get_post_q();
		$this->load->view('main_view',$data);
	}
	public function add_post_view()
	{
		$this->load->view('create_post');
	}
	public function create_post()
	{
		$post_img_url = '';
		// upload img
		$post_img_data = array();
		$post_img_path_Str = 'assets/posts_imgs/';
		$config = [
			'upload_path' => $post_img_path_Str,
			'allowed_types' => 'png|jpg|jpeg|gif'
		];
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('inputimg')) {
            $error = array('error' => $this->upload->display_errors());
        } 
        else{
        	$post_img_data = $this->upload->data(); 			
        }
        $post_img_url = base_url('assets/posts_imgs/').$post_img_data['file_name'];
        if (!isset($post_img_data['file_name'])) {
        	$post_img_url = '';
        }
        // die(base_url('assets/posts_imgs/').$post_img_data['file_name']);

		// end upload img
		$this->form_validation->set_rules('post_title', 'Post Title', 'required');
        $this->form_validation->set_rules('textareadesc', 'Post Descrition', 'required');
        // $this->form_validation->set_rules('post_img', 'Post Img', 'required');
		$post_publish_date =  date("Y/m/d");
		$post_publish_time = date("h:i:s");
		$user_name = $this->session->userdata('userename');
		$user_id = $this->session->userdata('usereid');
	   if ($this->form_validation->run())
        {
	        $data = array(
	                'post_title'      => $this->input->post('post_title'),
	                'post_desc'   => $this->input->post('textareadesc'),
	                'post_publish_date' => $post_publish_date,
	                'post_publish_time' => $post_publish_time,
	                'post_img_url' => $post_img_url,
	                'user_id' => $user_id,
	                'user_name' => $user_name              
	            );
			unset($data['Postsubmit']);
			$this->load->model('Posts_model');
			if($this->Posts_model->create_post_q($data))
			{
				$this->session->set_flashdata('msg','Post Created Successfully');
			}
			else
			{
				$this->session->set_flashdata('msg','Faild To Create The Post');
			} 
			return redirect('posts/add_post_view'); 
        }
        else{
        	    $this->load->view('add_post_view'); 
        }

	}
}