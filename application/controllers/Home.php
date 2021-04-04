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

	function getApplicantLists(){
        $data = $row = array();
        
        // Fetch member's records
        $appData = $this->applicant->getRows($_POST);
        
        $i = $_POST['start'];
        foreach($appData as $applicant){
			$i++;
			$edit = '<a href="'.base_url().'home/edit_applicant/'.(base64_encode(base64_encode($applicant->id))).'" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-flat btn-success btn-sm"><i class="fa fa-edit"></i></a>';
			if($applicant->status == "H"){  $type = "success"; $text = "HIRED"; }
			else if($applicant->status == "P"){  $type = "warning"; $text = "PENDING"; }
			else if($applicant->status == "R"){  $type = "danger"; $text = "REJECTED"; }
			$badge = "<span class='right badge badge-".$type."'>".$text."</span>";

			$name = "<a href=".base_url()."home/applicant_details/".base64_encode(base64_encode($applicant->id)).">".$applicant->firstname . " ". $applicant->lastname."</a>";
			
            $status = ($applicant->status == "P")?'PENDING':'HIRE';
            $sex = ($applicant->sex == "M")?'Male':'Female';
            $data[] = array($i, $name, $sex, $applicant->position, $applicant->application_date, $badge,$edit);
        }
        
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->applicant->countAll(),
            "recordsFiltered" => $this->applicant->countFiltered($_POST),
            "data" => $data,
        );
        
        // Output to JSON format
        echo json_encode($output);
    }


	function getEmployeeLists(){
        $data = $row = array();
        
        // Fetch member's records
        $appData = $this->employee->getRows($_POST);
        
        $i = $_POST['start'];
        foreach($appData as $employee){
			$create_date_updated = date_create($employee->date_updated);
			$date_updated = date_format($create_date_updated,"M d, Y");
			$i++;
			$edit = '<a href="'.base_url().'home/edit_employee/'.(base64_encode(base64_encode($employee->id))).'" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-flat btn-success btn-sm"><i class="fa fa-edit"></i></a>';
			if($employee->status == "A"){  $type = "success"; $text = "ACTIVE"; }
			else if($employee->status == "RT"){  $type = "danger"; $text = "RETIRED"; }
			else if($employee->status == "RS"){  $type = "danger"; $text = "RESIGNED"; }
			else if($employee->status == "ENDO"){  $type = "danger"; $text = "END OF CONTRACT"; }
			$status = "<span class='right badge badge-".$type."'>".$text."</span>";

			if($employee->employee_type == "COS"){  $type = "warning"; $text = "Contract of Service"; }
			else if($employee->employee_type == "JO"){  $type = "warning"; $text = "Job Order"; }
			else if($employee->employee_type == "CASUAL"){  $type = "info"; $text = "Casual"; }
			else if($employee->employee_type == "REGULAR"){  $type = "primary"; $text = "Regular"; }
			$employee_type = "<span class='right badge badge-".$type."'>".$text."</span>";

			$name = "<a href=".base_url()."home/employee_details/".base64_encode(base64_encode($employee->id)).">".$employee->firstname . " ". $employee->lastname."</a>";
			
            $sex = ($employee->sex == "M")?'Male':'Female';
			$leave_credits = $employee->leave_credits." as of ".$date_updated;
            $data[] = array($i, $name, $sex, $employee->position,$employee_type,$leave_credits, $employee->date_hired, $status,$edit);
        }
        
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->employee->countAll(),
            "recordsFiltered" => $this->employee->countFiltered($_POST),
            "data" => $data,
        );
        
        // Output to JSON format
        echo json_encode($output);
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
		if($this->uri->segment(3)){
			
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
		else{
			redirect(base_url('home/applicants'));
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
		$remarks = $this->input->post('remarks');
		
		
		
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
					'remarks' => $remarks
				);
		$last_id = $this->employee->save_employee_changes($id,$flag, $data);
		
		$awards = array();
		for($i = 1; $i <= $this->input->post('award_counter'); $i++){
			$award_id = htmlspecialchars($this->input->post('award_id'.$i));
			$award_name = htmlspecialchars($this->input->post('award_name'.$i));
			$award_description = htmlspecialchars($this->input->post('award_description'.$i));
			$award_date = htmlspecialchars($this->input->post('award_date'.$i));
			if($award_name != "" & $award_description != "" && $award_date != ""){
				$award = array(
					"id" => $award_id,
					"name" => $award_name,
					"description"  => $award_description,
					"date"  => $award_date,
					"uid"  => $flag == 0 ? $last_id : $id,
				);
				$awards[] = $award;
				
			}
		}
		$this->employee->save_awards($id,$flag, $awards);

		
		//save workhistory
		$workhistory = array();
		for($i = 1; $i <= $this->input->post('workhistory_counter'); $i++){
			$we_id = htmlspecialchars($this->input->post('we_id'.$i));
			$we_agency = htmlspecialchars($this->input->post('we_agency'.$i));
			$we_position = htmlspecialchars($this->input->post('we_position'.$i));
			$we_from = htmlspecialchars($this->input->post('we_from'.$i));
			$we_to = htmlspecialchars($this->input->post('we_to'.$i));
			$we_salary = htmlspecialchars($this->input->post('we_salary'.$i));
			if($we_agency != "" && $we_position != "" && $we_from != "" && $we_to != "" && $we_salary != ""){
				$wh = array(
					"id" => $we_id,
					"agency" => $we_agency,
					"position"  => $we_position,
					"from"  => $we_from,
					"to"  => $we_to,
					"salary"  => $we_salary,
					"uid"  =>  $flag == 0 ? $last_id : $id,
				);
				$workhistory[] = $wh;
				
			}
		}
		$this->employee->save_workhistory($id,$flag, $workhistory);

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
        $position_type = $this->input->post('position_type');
        $application_date = $this->input->post('application_date');
        $status = $flag == 1 ? $this->input->post('status') : "P";

		
		$remarks = $this->input->post('remarks');
		
		$format = "%Y-%m-%d %h:%i %A";
		$current_date = mdate($format);

		$data = array(
			'firstname' => $firstname,
			'middlename' => $middlename,
			'lastname' => $lastname,
			'sex' => $sex,
			'birthdate' => $birthdate,
			'position' => $position,
			'position_type' => $position_type,
			'application_date' => $application_date,
			'status' => $status,
			'date_updated' => $current_date,
			'remarks' => $remarks
		);
		if($status == ""){unset($data['status']);}
		$last_id = $this->employee->save_applicant_changes($id,$flag, $data);

		//save awards
		$awards = array();
		for($i = 1; $i <= $this->input->post('award_counter'); $i++){
			$award_id = htmlspecialchars($this->input->post('award_id'.$i));
			$award_name = htmlspecialchars($this->input->post('award_name'.$i));
			$award_description = htmlspecialchars($this->input->post('award_description'.$i));
			$award_date = htmlspecialchars($this->input->post('award_date'.$i));
			if($award_name != "" & $award_description != "" && $award_date != ""){
				$award = array(
					"id" => $award_id,
					"name" => $award_name,
					"description"  => $award_description,
					"date"  => $award_date,
					"uid"  =>  $flag == 0 ? $last_id : $id,
				);
				$awards[] = $award;
				
			}
		}
		$this->employee->save_awards($id,$flag, $awards);


		if($status == "H"){
			$data = array(
				'firstname' => $firstname,
				'middlename' => $middlename,
				'lastname' => $lastname,
				'sex' => $sex,
				'birthdate' => $birthdate,
				'position' => $position,
				'employee_type' => $position_type,
				'leave_credits' => 0,
				'date_hired' => $current_date,
				'status' => "A",
				'date_updated' => $current_date
			);
			if($this->employee->save_employee_changes($id,0, $data)){
				header('location:'.base_url()."home/edit_employee/".base64_encode(base64_encode($this->db->insert_id())));
				$this->session->set_flashdata('message','Applicant successfully hired.');
			}
		}
		else{
			if($flag){
				header('location:'.base_url()."home/edit_applicant/".$tempid);
				$this->session->set_flashdata('message','Applicant record is successfully updated.');
			}
			else{
				header('location:'.base_url()."home/add_applicant/".$tempid);
				$this->session->set_flashdata('message','Applicant record is successfully created.');
			}
		}
	}

	public function remove_award(){
		$id = $this->input->post('id');
		$result = $this->employee->remove_award($id);
		return result;
	}
	
	public function remove_workhistory(){
		$id = $this->input->post('id');
		$result = $this->employee->remove_workhistory($id);
		return result;
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
		$config['encrypt_name'] = true;
		$config['overwrite'] = true;
        $this->load->library('upload',$config);
		$uid = $this->input->post('uid');

		if($this->upload->do_upload("pds")){
			$file = array("upload_data" => $this->upload->data());
			$data = array("pds_path" => "./files/pds/".$file["upload_data"]["file_name"]);

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

	function upload_employee_pds(){
		
        $session_data = $this->session->userdata('user');
		
		$config['upload_path'] = "./files/pds";
		$config['allowed_types'] = 'jpg|png|doc|docx|xlsx|xls|pdf';
		$config['encrypt_name'] = true;
		$config['overwrite'] = true;
        $this->load->library('upload',$config);
		$uid = $this->input->post('uid');

		if($this->upload->do_upload("pds")){
			$file = array("upload_data" => $this->upload->data());
			$data = array("pds_path" => "./files/pds/".$file["upload_data"]["file_name"]);

			if($this->employee->save_employee_changes(base64_decode(base64_decode($uid)),1,$data)){
				header('location:'.base_url()."home/edit_employee/".$uid);
				$this->session->set_flashdata('message','Successfully Updated.');
			}
			else{
				header('location:'.base_url()."home/edit_employee/".$uid);
				$this->session->set_flashdata('error','Error updating.');
			}
		}
		else{
			header('location:'.base_url()."home/edit_employee/".$uid);
			$this->session->set_flashdata('error','Error uploading PDS.');
		}
	}

	function upload_saln(){
		
        $session_data = $this->session->userdata('user');
		
		$config['upload_path'] = "./files/saln";
		$config['allowed_types'] = 'jpg|png|doc|docx|xlsx|xls|pdf';
		$config['encrypt_name'] = true;
		$config['overwrite'] = true;
        $this->load->library('upload',$config);
		$uid = $this->input->post('uid');
		
		if($this->upload->do_upload("saln")){
			$file = array("upload_data" => $this->upload->data());
			$data = array("saln_path" => "./files/saln/".$file["upload_data"]["file_name"]);

			if($this->employee->save_employee_changes(base64_decode(base64_decode($uid)),1,$data)){
				header('location:'.base_url()."home/edit_employee/".$uid);
				$this->session->set_flashdata('message','Successfully Updated.');
			}
			else{
				header('location:'.base_url()."home/edit_employee/".$uid);
				$this->session->set_flashdata('error','Error updating.');
			}
		}
		else{
			header('location:'.base_url()."home/edit_employee/".$uid);
			$this->session->set_flashdata('error','Error uploading SALN.');
		}
	}


	// get chart functions
	function get_ar_1_year(){
		$result = $this->employee->get_ar_1_year();
		header('Content-Type: application/json');
    	echo json_encode( $result );
	}

	function get_er_1_year(){
		$result = $this->employee->get_er_1_year();
		header('Content-Type: application/json');
    	echo json_encode( $result );
	}

	function getNoOfApplicants(){
		$year = $this->input->post('year');
		$status = $this->input->post('status');
		$data = $status == "*" ? array('year' => $year) : array('year' => $year, 'status' => $status);
		$result = $this->employee->getNoOfApplicants($data);
		
		header('Content-Type: application/json');
    	echo json_encode( $result );
	}
	
	function getHiredEmployees(){
		$year = $this->input->post('year');
		$type = $this->input->post('type');
		$data = $type == "*" ? array('year' => $year) : array('year' => $year, 'type' => $type);
		$result = $this->employee->getHiredEmployees($data);
		
		header('Content-Type: application/json');
    	echo json_encode( $result );
	}
	
}