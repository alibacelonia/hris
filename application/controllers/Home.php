<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		
		$data["title"] = "Home";
		$data["current_page"] = "home";
		$session_data = $this->session->userdata('user');
		if(isset($session_data)){
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			// var_dump($data);
			$this->load->view('templates/styles',$data);
			$this->load->view('templates/header',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('admin/home',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/scripts');
		}
		else{
			redirect(base_url());
		}

	}
	public function applicants()
	{
		
		$data["title"] = "Applicants";
		$data["current_page"] = "applicants";
		$data['apps'] = $this->employee->get_applicants();
		$session_data = $this->session->userdata('user');
		if(isset($session_data)){
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			// var_dump($data);
			$this->load->view('templates/styles',$data);
			$this->load->view('templates/header',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('admin/applicants',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/scripts');
		}
		else{
			redirect(base_url());
		}

	}
	public function employees()
	{
		
		$data["title"] = "Employees";
		$data["current_page"] = "employees";
		$data['emps'] = $this->employee->get_employees();
		$session_data = $this->session->userdata('user');
		if(isset($session_data)){
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			// var_dump($data);
			$this->load->view('templates/styles',$data);
			$this->load->view('templates/header',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('admin/employees',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/scripts');
		}
		else{
			redirect(base_url());
		}

	}

	public function add_employee()
	{
		
		$data['id'] = "";
		$data["title"] = "Add Employee";
		$data["current_page"] = "employees";
		$session_data = $this->session->userdata('user');
		if(isset($session_data)){
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			// var_dump($data);
			$this->load->view('templates/styles',$data);
			$this->load->view('templates/header',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('admin/add_employee',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/scripts');
		}
		else{
			redirect(base_url());
		}

	}

	public function add_applicant()
	{
		
		$data['id'] = "";
		$data["title"] = "Add Applicant";
		$data["current_page"] = "applicants";
		$session_data = $this->session->userdata('user');
		if(isset($session_data)){
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			// var_dump($data);
			$this->load->view('templates/styles',$data);
			$this->load->view('templates/header',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('admin/add_applicant',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/scripts');
		}
		else{
			redirect(base_url());
		}

	}

	public function edit_employee()
	{
		
		$id = base64_decode(base64_decode($this->uri->segment(3)));
		
		$data['employee'] = $this->employee->get_employee_details(array("id"=>$id));

		$data['id'] = $id;
		$data["title"] = "Edit Employee";
		$data["current_page"] = "employees";
		$session_data = $this->session->userdata('user');
		if(isset($session_data)){
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			// var_dump($data);
			$this->load->view('templates/styles',$data);
			$this->load->view('templates/header',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('admin/edit_employee',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/scripts');
		}
		else{
			redirect(base_url());
		}

	}
	public function edit_applicant()
	{
		
		$id = base64_decode(base64_decode($this->uri->segment(3)));
		
		$data['applicant'] = $this->employee->get_applicant_details(array("id"=>$id));

		$data['id'] = $id;
		$data["title"] = "Edit Applicant";
		$data["current_page"] = "applicants";
		$session_data = $this->session->userdata('user');
		if(isset($session_data)){
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			// var_dump($data);
			$this->load->view('templates/styles',$data);
			$this->load->view('templates/header',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('admin/edit_applicant',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/scripts');
		}
		else{
			redirect(base_url());
		}

	}
	public function save_changes()
	{
		$tempid = $this->input->post('id');
		$id = base64_decode(base64_decode($tempid));
		$flag = $this->input->post('flag');

		$firstname = $this->input->post('firstname');
		$middlename = $this->input->post('middlename');
		$lastname = $this->input->post('lastname');
		$sex = $this->input->post('sex');
		$birthdate = $this->input->post('birthdate');
		
        $position = $this->input->post('position');
        $date_hired = $this->input->post('date_hired');
        $employee_type = $this->input->post('employee_type');
        $status = $this->input->post('status');
        $leave_credits = $this->input->post('leave_credits');
		
		$data = array(
					'firstname' => $firstname,
					'middlename' => $middlename,
					'lastname' => $lastname,
					'sex' => $sex,
					'birthdate' => $birthdate,
					'position' => $position,
					'date_hired' => $date_hired,
					'employee_type' => $employee_type,
					'status' => $status,
					'leave_credits' => $leave_credits
				);
		$this->employee->save_employee_changes($id,$flag, $data);
		if($flag){
			header('location:'.base_url()."home/edit_employee/".$tempid);
			$this->session->set_flashdata('message','Employee record is successfully updated.');
		}
		else{
			header('location:'.base_url()."home/add_employee/".$tempid);
			$this->session->set_flashdata('message','Employee record is successfully created.');
		}
	}

	public function save_changes_applicant()
	{
		$tempid = $this->input->post('id');
		$id = base64_decode(base64_decode($tempid));
		$flag = $this->input->post('flag');

		$firstname = $this->input->post('firstname');
		$middlename = $this->input->post('middlename');
		$lastname = $this->input->post('lastname');
		$sex = $this->input->post('sex');
		$birthdate = $this->input->post('birthdate');
		
        $position = $this->input->post('position');
        $application_date = $this->input->post('application_date');
        $status = $this->input->post('status');
		
		$data = array(
					'firstname' => $firstname,
					'middlename' => $middlename,
					'lastname' => $lastname,
					'sex' => $sex,
					'birthdate' => $birthdate,
					'position' => $position,
					'application_date' => $application_date,
					'status' => $status,
				);
		$this->employee->save_applicant_changes($id,$flag, $data);
		if($flag){
			header('location:'.base_url()."home/edit_applicant/".$tempid);
			$this->session->set_flashdata('message','Applicant record is successfully updated.');
		}
		else{
			header('location:'.base_url()."home/add_applicant/".$tempid);
			$this->session->set_flashdata('message','Applicant record is successfully created.');
		}
	}

	public function reports()
	{
		
		$data["title"] = "Reports";
		$data["current_page"] = "reports";
		$session_data = $this->session->userdata('user');
		if(isset($session_data)){
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			// var_dump($data);
			$this->load->view('templates/styles',$data);
			$this->load->view('templates/header',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('admin/reports',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/scripts');
		}
		else{
			redirect(base_url());
		}

	}
	
	public function account()
	{
		
		$data["title"] = "Account";
		$data["current_page"] = "account";
		$session_data = $this->session->userdata('user');
		if(isset($session_data)){
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			// var_dump($data);
			$this->load->view('templates/styles',$data);
			$this->load->view('templates/header',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('admin/account',$data);
			$this->load->view('templates/footer');
			$this->load->view('templates/scripts');
		}
		else{
			redirect(base_url());
		}

	}
}
