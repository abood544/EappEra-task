<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		// $this->load->model('Users_model');
		// $data['users'] = $this->Users_model->getUsers();
		// echo "<pre>";
		// print_r($users);
		// echo "</pre>";
		// exit();
		$this->load->view('welcome_message');
	}
	// public function create_user()
	// {
	// 	$this->load->view('create_user');
	// }
	// public function update_user($id)
	// {
	// 	$this->load->model('Users_model');
	// 	$data['users'] = $this->Users_model->getSelectUsers($id);
	// 	$this->load->view('update_user',$data);
	// }
	// public function add_user()
	// {
	// 	$this->form_validation->set_rules('user_name', 'Username', 'required');
 //        $this->form_validation->set_rules('user_email', 'Email', 'required');        
 //        $this->form_validation->set_rules('user_password', 'Password', 'required');
 //        $this->form_validation->set_rules('user_passwordC', 'Confirmd Password', 'required|matches[user_password]');
 //        $this->form_validation->set_rules('user_phone', 'Phone', 'required');
 //        $this->form_validation->set_rules('user_address', 'Address', 'required');

 //        if ($this->form_validation->run())
 //        { 
 //        	// $data = $this->input->post();
 //        	$data = array(
 //                'user_name'       => $this->input->post('user_name'),
 //                'user_email'      => $this->input->post('user_email'),
 //                'user_password'   => $this->input->post('user_password'),
 //                'user_phone'      => $this->input->post('user_phone'),
 //                'user_address'        => $this->input->post('user_address')
 //            );
 //        	unset($data['createsubmit']);
 //        	$this->load->model('Users_model');
 //        	if ($this->Users_model->createUser($data))
 //        	{
 //        		$this->session->set_flashdata('msg','User Create Successfully');

 //        	}
 //        	else
 //        	{
 //        		$this->session->set_flashdata('msg','Faild');
 //        	}
 //        	return redirect('welcome'); 

 //        }
 //        else
 //        {
 //                 $this->load->view('create_user'); 
 //        }
	// }
	// public function edit_user($id)
	// { 
	// 	$this->form_validation->set_rules('user_name', 'Username', 'required');
 //        $this->form_validation->set_rules('user_email', 'Email', 'required');
 //        $this->form_validation->set_rules('user_phone', 'Phone', 'required');
 //        $this->form_validation->set_rules('user_password', 'Password', 'required');
 //        $this->form_validation->set_rules('user_passwordC', 'Confirmd Password', 'required|matches[user_password]');
 //        $this->form_validation->set_rules('user_address', 'Address', 'required');

 //        if ($this->form_validation->run())
 //        { 
 //        	// $data = $this->input->post();
 //        	$data = array(
 //                'user_name'       => $this->input->post('user_name'),
 //                'user_email'      => $this->input->post('user_email'),
 //                'user_password'   => $this->input->post('user_password'),
 //                'user_phone'      => $this->input->post('user_phone'),
 //                'user_address'        => $this->input->post('user_address')
 //            );
 //        	unset($data['createsubmit']);
 //        	$this->load->model('Users_model');
 //        	if ($this->Users_model->updateUser($data,$id))
 //        	{
 //        		$this->session->set_flashdata('msg','User Updated Successfully');

 //        	}
 //        	else
 //        	{
 //        		$this->session->set_flashdata('msg','Faild to update');
 //        	}
 //        	return redirect('welcome'); 

 //        }
 //        else
 //        {
 //                 $this->load->view('create_user'); 
 //        }
	// }
	// public function delete_user($id)
	// {
	// 	$this->load->model('Users_model');
	// 	if ($this->Users_model->deleteSelectUsers($id))
	// 	{
	// 		$this->session->set_flashdata('msg','User Deleted Successfully');
	// 	}
	// 	else
	// 	{
	// 		$this->session->set_flashdata('msg','Faild to delete');
	// 	}
	// 	return redirect('welcome'); 
	// }
}
