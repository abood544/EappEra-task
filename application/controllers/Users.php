<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
		$this->load->model('Users_model');
		$data['users'] = $this->Users_model->getUsers();
		// echo "<pre>";
		// print_r($users);
		// echo "</pre>";
		// exit();
		$this->load->view('view_users',$data);
	}
	public function user_login()
	{
		$this->load->view('users_login');
	}
	public function user_login_validat()
	{
		$this->form_validation->set_rules('user_email', 'Email', 'trim|required');
        $this->form_validation->set_rules('user_password', 'Password', 'trim|required');	
         if ($this->form_validation->run())
        { 
        	$data = $this->input->post();
        	unset($data['loginsubmit']);
        	$this->load->model('Users_model');
        	$datalog = $this->Users_model->check_login_vaildate($data);

        	if ($datalog)
        	{
        		// $this->session->set_flashdata('msg','User Create Successfully');
        		
        		$data_login = array(
        			'useremail' => $datalog->user_email,
        			'userename' => $datalog->user_name,
        			'usereid' => $datalog->user_id,
        			'is_logged_in' => true
        		);
        		$this->session->set_userdata($data_login);
        		return redirect('posts');
        	}
        	else
        	{ 
        		$this->session->set_flashdata('msg','Invaild User Email Or Password');
        		$this->load->view('users_login');	
        	}
         

        }
        else
        { 
        		 // $this->session->set_flashdata('msg','User Create Successfully');
                 $this->load->view('users_login');
        }
	}
	public function check_if_email_exist($requseted_email)
	{
		$this->load->model('Users_model');
		$email_exsit = $this->Users_model->check_if_email_exist($requseted_email);
		if ($email_exsit) {
			return TRUE;
		}
		else
		{
		    $this->form_validation->set_message('check_if_email_exist', 'This Email Is Already Exsit');
			return FALSE;
		}

	}
	public function create_user()
	{
		$this->load->view('create_user');
	}
	public function update_user($id)
	{
		$this->load->model('Users_model');
		$data['users'] = $this->Users_model->getSelectUsers($id);
		$this->load->view('update_user',$data);
	}
	public function add_user()
	{
		$this->form_validation->set_rules('user_name', 'Username', 'trim|required');
        $this->form_validation->set_rules('user_email', 'Email', 'trim|required|callback_check_if_email_exist');        
        $this->form_validation->set_rules('user_password', 'Password', 'trim|required');
        $this->form_validation->set_rules('user_passwordC', 'Confirmd Password', 'trim|required|matches[user_password]');
        $this->form_validation->set_rules('user_phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('user_address', 'Address', 'trim|required');

        if ($this->form_validation->run())
        { 
        	// $data = $this->input->post();
        	$data = array(
                'user_name'       => $this->input->post('user_name'),
                'user_email'      => $this->input->post('user_email'),
                'user_password'   => md5($this->input->post('user_password')),
                'user_phone'      => $this->input->post('user_phone'),
                'user_address'        => $this->input->post('user_address')
            );
        	unset($data['createsubmit']);
        	$this->load->model('Users_model');
        	if ($this->Users_model->createUser($data))
        	{
        		$this->session->set_flashdata('msg','User Create Successfully');

        	}
        	else
        	{
        		$this->session->set_flashdata('msg','Faild');
        	}
        	return redirect('users/create_user'); 

        }
        else
        {
                 $this->load->view('create_user'); 
        }
	}
	public function edit_user($id)
	{ 
		$this->form_validation->set_rules('user_name', 'Username', 'required');
        $this->form_validation->set_rules('user_email', 'Email', 'required');
        $this->form_validation->set_rules('user_phone', 'Phone', 'required');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        $this->form_validation->set_rules('user_passwordC', 'Confirmd Password', 'required|matches[user_password]');
        $this->form_validation->set_rules('user_address', 'Address', 'required');

        if ($this->form_validation->run())
        { 
        	// $data = $this->input->post();
        	$data = array(
                'user_name'       => $this->input->post('user_name'),
                'user_email'      => $this->input->post('user_email'),
                'user_password'   => md5($this->input->post('user_password')),
                'user_phone'      => $this->input->post('user_phone'),
                'user_address'        => $this->input->post('user_address')
            );
        	unset($data['createsubmit']);
        	$this->load->model('Users_model');
        	if ($this->Users_model->updateUser($data,$id))
        	{
        		$this->session->set_flashdata('msg','User Updated Successfully');

        	}
        	else
        	{
        		$this->session->set_flashdata('msg','Faild to update');
        	}
        	return redirect("users/update_user/{$id}"); 

        }
        else
        {
                return redirect("users/update_user/{$id}"); 
        }
	}
	public function delete_user($id)
	{
		$this->load->model('Users_model');
		if ($this->Users_model->deleteSelectUsers($id))
		{
			$this->session->set_flashdata('msg','User Deleted Successfully');
		}
		else
		{
			$this->session->set_flashdata('msg','Faild to delete');
		}
		return redirect('users'); 
	}
	public function logout()
    {    
        if ($this->session->userdata('is_logged_in')) {
            
            //$this->session->unset_userdata(array('email' => '', 'is_logged_in' => ''));
            $this->session->unset_userdata('useremail');
            $this->session->unset_userdata('is_logged_in');
            $this->session->unset_userdata('username'); 
            $this->session->unset_userdata('usereid');          
        }
        return redirect(base_url()); 
    }   
}
