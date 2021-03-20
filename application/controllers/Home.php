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
			$data['dashboard_count'] = $this->employee->get_dashboard_count();
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

	public function employee_details()
	{
		
		$id = base64_decode(base64_decode($this->uri->segment(3)));
		
		$data['employee'] = $this->employee->get_employee_details(array("id"=>$id));

		$data['id'] = $id;
		$data["title"] = "Employee Details";
		$data["current_page"] = "employees";
		$session_data = $this->session->userdata('user');
		if(isset($session_data)){
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			// var_dump($data);
			$this->load->view('templates/styles',$data);
			$this->load->view('templates/header',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('admin/employee_details',$data);
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
	
	public function applicant_details()
	{
		
		$id = base64_decode(base64_decode($this->uri->segment(3)));
		
		$data['applicant'] = $this->employee->get_applicant_details(array("id"=>$id));

		$data['id'] = $id;
		$data["title"] = "Applicant Details";
		$data["current_page"] = "applicants";
		$session_data = $this->session->userdata('user');
		if(isset($session_data)){
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			// var_dump($data);
			$this->load->view('templates/styles',$data);
			$this->load->view('templates/header',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('admin/applicant_details',$data);
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


		//personal info
		$firstname = $this->input->post('firstname');
		$middlename = $this->input->post('middlename');
		$lastname = $this->input->post('lastname');
		$sex = $this->input->post('sex');
		$birthdate = $this->input->post('birthdate');

		//educational background
        $elem_school = $this->input->post('elem_school');
        $elem_from = $this->input->post('elem_from');
        $elem_to = $this->input->post('elem_to');
        $hs_school = $this->input->post('hs_school');
		$hs_from = $this->input->post('hs_from');
		$hs_to = $this->input->post('hs_to');
        $college_school = $this->input->post('college_school');
        $college_course = $this->input->post('college_course');
        $college_from = $this->input->post('college_from');
        $college_to = $this->input->post('college_to');

		//empoyment info
        $position = $this->input->post('position');
        $date_hired = $this->input->post('date_hired');
        $employee_type = $this->input->post('employee_type');
        $status = $this->input->post('status');
		$leave_credits = $this->input->post('leave_credits');
		$salary = $this->input->post('salary');

		
		//work history
        $we_agency1 = $this->input->post('we_agency1');
        $we_position1 = $this->input->post('we_position1');
        $we_from1 = $this->input->post('we_from1');
        $we_to1 = $this->input->post('we_to1');
		$we_salary1 = $this->input->post('we_salary1');

        $we_agency2 = $this->input->post('we_agency2');
        $we_position2 = $this->input->post('we_position2');
        $we_from2 = $this->input->post('we_from2');
        $we_to2 = $this->input->post('we_to2');
		$we_salary2 = $this->input->post('we_salary2');
		
        $we_agency3 = $this->input->post('we_agency3');
        $we_position3 = $this->input->post('we_position3');
        $we_from3 = $this->input->post('we_from3');
        $we_to3 = $this->input->post('we_to3');
		$we_salary3 = $this->input->post('we_salary3');
		
        $we_agency4 = $this->input->post('we_agency4');
        $we_position4 = $this->input->post('we_position4');
        $we_from4 = $this->input->post('we_from4');
        $we_to4 = $this->input->post('we_to4');
		$we_salary4 = $this->input->post('we_salary4');
		
		
		$format = "%Y-%m-%d %h:%i %A";
		$current_date = mdate($format);
		
		$data = array(
					'firstname' => $firstname,
					'middlename' => $middlename,
					'lastname' => $lastname,
					'sex' => $sex,
					'birthdate' => $birthdate,

					'elem_school' => $elem_school,
					'elem_from' => $elem_from,
					'elem_to' => $elem_to,
					'hs_school' => $hs_school,
					'hs_from' => $hs_from,
					'hs_to' => $hs_to,
					'college_school' => $college_school,
					'college_course' => $college_course,
					'college_from' => $college_from,
					'college_to' => $college_to,
					
					'position' => $position,
					'date_hired' => $date_hired,
					'employee_type' => $employee_type,
					'status' => $status,
					'leave_credits' => $leave_credits,
					'salary' => $salary,
					'date_updated' => $current_date,

					'we_agency1' => $we_agency1,
					'we_position1' => $we_position1,
					'we_from1' => $we_from1,
					'we_to1' => $we_to1,
					'we_salary1' => $we_salary1,
					'we_agency2' => $we_agency2,
					'we_position2' => $we_position2,
					'we_from2' => $we_from2,
					'we_to2' => $we_to2,
					'we_salary2' => $we_salary2,
					'we_agency3' => $we_agency3,
					'we_position3' => $we_position3,
					'we_from3' => $we_from3,
					'we_to3' => $we_to3,
					'we_salary3' => $we_salary3,
					'we_agency4' => $we_agency4,
					'we_position4' => $we_position4,
					'we_from4' => $we_from4,
					'we_to4' => $we_to4,
					'we_salary4' => $we_salary4
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
		
		$format = "%Y-%m-%d %h:%i %A";
		$current_date = mdate($format);

		$data = array(
					'firstname' => $firstname,
					'middlename' => $middlename,
					'lastname' => $lastname,
					'sex' => $sex,
					'birthdate' => $birthdate,
					'position' => $position,
					'application_date' => $application_date,
					'status' => $status,
					'date_updated' => $current_date
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

	public function save_account_info()
	{
		$session_data = $this->session->userdata('user');
		$firstname = $this->input->post('firstname');
		$middlename = $this->input->post('middlename');
		$lastname = $this->input->post('lastname');
		$gender = $this->input->post('gender');
		$phone = $this->input->post('phone');
		$birthdate = $this->input->post('birthdate');
		
		$data = array(
					'firstname' => $firstname,
					'middlename' => $middlename,
					'lastname' => $lastname,
					'gender' => $gender,
					'phone' => $phone,
					'birthdate' => $birthdate
				);
		
		$this->user->save_user_changes($session_data['id'], $data);
		header('location:'.base_url()."home/account");
		$this->session->set_flashdata('user_success','Account successfully updated.');
	}

	public function change_password(){
		
		$session_data = $this->session->userdata('user');
		$password = $this->input->post('current_password');
		$new_password = $this->input->post('new_password');
		$confirm_password = $this->input->post('confirm_password');
		
		$user = $this->user->get_user_details(array("id"=>$session_data['id']));

		if(password_verify($password,$user['password']) && $new_password == $confirm_password){
			$data = array(
				'password' => password_hash($new_password,PASSWORD_BCRYPT)
			);
			//var_dump($data);
			$this->user->save_user_changes($session_data['id'], $data);
			header('location:'.base_url()."home/account");
			$this->session->set_flashdata('password_success','You successfully changed your password.');
		}
		else{
			if(!password_verify($password,$user['password'])){
				header('location:'.base_url()."home/account");
				$this->session->set_flashdata('password_error','Incorrect password. Please try again.');
			}
			else if($new_password != $confirm_password){
				header('location:'.base_url()."home/account");
				$this->session->set_flashdata('password_error','Password does not match.');
			}
			else if(strlen($new_password) <=5){
				header('location:'.base_url()."home/myaccount");
				$this->session->set_flashdata('password_error','Password must atleast 6 characters.');
			}
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

	function upload_pds(){
		
        $session_data = $this->session->userdata('user');
		
		$config['upload_path'] = "./files/pds";
		$config['allowed_types'] = 'jpg|png|doc|docx|xlsx|xls|pdf';
		$config['encrypt_name'] = false;
		$config['overwrite'] = true;
        $this->load->library('upload',$config);
		$path = "./files/pds/". str_replace(' ','_',$_FILES["pds"]["name"]);
		$uid = $this->input->post('uid');

		if($this->upload->do_upload("pds")){
			$file = array("upload_data" => $this->upload->data());
			$data = array("pds_path" => $path);

			if($this->employee->save_applicant_changes(base64_decode(base64_decode($uid)),1,$data)){
				header('location:'.base_url()."home/edit_applicant/".$uid);
				$this->session->set_flashdata('message','Successfully Updated.');
			}
			else{
				header('location:'.base_url()."home/edit_applicant/".$uid);
				$this->session->set_flashdata('error','Error updating.');
			}
		}
		else{
			header('location:'.base_url()."home/edit_applicant/".$uid);
			$this->session->set_flashdata('error','Error uploading PDS.');
		}
	}


	function upload_saln(){
		
        $session_data = $this->session->userdata('user');
		
		$config['upload_path'] = "./files/saln";
		$config['allowed_types'] = 'jpg|png|doc|docx|xlsx|xls|pdf';
		$config['encrypt_name'] = false;
		$config['overwrite'] = true;
        $this->load->library('upload',$config);
		$path = "./files/saln/". str_replace(' ','_',$_FILES["saln"]["name"]);
		$uid = $this->input->post('uid');
		
		if($this->upload->do_upload("saln")){
			$file = array("upload_data" => $this->upload->data());
			$data = array("saln_path" => $path);

			if($this->employee->save_applicant_changes(base64_decode(base64_decode($uid)),1,$data)){
				header('location:'.base_url()."home/edit_applicant/".$uid);
				$this->session->set_flashdata('message','Successfully Updated.');
			}
			else{
				header('location:'.base_url()."home/edit_applicant/".$uid);
				$this->session->set_flashdata('error','Error updating.');
			}
		}
		else{
			header('location:'.base_url()."home/edit_applicant/".$uid);
			$this->session->set_flashdata('error','Error uploading SALN.');
		}
	}
}