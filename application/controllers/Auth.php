<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data["title"] = "Login";
		$data["current_page"] = "login";
		$session_data = $this->session->userdata('user');
		if(isset($session_data)){
			redirect(base_url()."home");
		}
		else{
			$this->load->view('login',$data);
		}
	}
	
	public function do_login()
	{
		$username = $this->input->post('email');
        $password = $this->input->post('password');
		
	
		$data = $this->auth->auth_check($username,$password);
		if($data){
			if($data['status'] == "A" && $data['type'] == "A"){
				$this->session->set_userdata('user', $data);
				redirect(base_url()."home");
			}
			else{
				header('location:'.base_url()."auth/".$this->index());
				$this->session->set_flashdata('error','Your account is deactivated. Please contact your administartor.');
			}
		}
		else{
			header('location:'.base_url()."auth/".$this->index());
			$this->session->set_flashdata('error','Incorrect username or password.');
		}
	}
	 
	public function logout(){
		$this->session->unset_userdata('user');
		redirect(base_url().$this->index());
	}    
}
