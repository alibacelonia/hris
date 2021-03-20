<?php
class Employee_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_dashboard_count()
    {
		
		$query = $this->db->select("(SELECT COUNT(id) FROM applicants WHERE MONTH(NOW()) = MONTH(application_date)) AS new_applicants, (SELECT COUNT(id) FROM employees WHERE MONTH(NOW()) = MONTH(date_hired)) AS new_employees, (SELECT COUNT(id) FROM applicants) AS applicants, (SELECT COUNT(id) FROM employees) AS employees")
				->get();
		
		$result = $query->result_array();
		return $result;
	}

	public function get_employees()
    {
		
		$query = $this->db->select("id,CONCAT(firstname,' ', SUBSTR(middlename,1,1),'. ', lastname) AS name, sex, birthdate,elem_school,elem_from,elem_to,hs_school,hs_from,hs_to,college_school, college_course, college_from, college_to, position, date_hired, employee_type as type, status,leave_credits as credits,salary,date_updated,we_agency1,we_position1,we_from1,we_to1,we_salary1,we_agency2,we_position2,we_from2,we_to2,we_salary2,we_agency3,we_position3,we_from3,we_to3,we_salary3,we_agency4,we_position4,we_from4,we_to4,we_salary4")
				->get('employees');
		
		$result = $query->result_array();
		return $result;
	}

	public function get_applicants()
    {
		
		$query = $this->db->select("id,CONCAT(firstname,' ', SUBSTR(middlename,1,1),'. ', lastname) AS name, sex, birthdate, position, application_date,status,date_updated,saln_path,pds_path")
				->get('applicants');
		
		$result = $query->result_array();
		return $result;
	}
	
	public function get_employee_details($data)
    {
		
		$this->db->select('*');
		$this->db->from('employees');
		$this->db->where('id', $data['id']);
		$query = $this->db->get();
		
		$result = $query->row_array();
		return $result;
	}
	
	public function get_applicant_details($data)
    {
		
		$this->db->select('*');
		$this->db->from('applicants');
		$this->db->where('id', $data['id']);
		$query = $this->db->get();
		
		$result = $query->row_array();
		return $result;
    }
	public function save_employee_changes($id,$flag,$data)
	{
		if($flag){
			$result = $this->db->where('id', $id)
								->update('employees',$data);
			return $result;
		}
		else{
			$result = $this->db->insert('employees', $data);
			return $result;
		}
	}
	public function save_applicant_changes($id,$flag,$data)
	{
		if($flag){
			$result = $this->db->where('id', $id)
								->update('applicants',$data);
			return $result;
		}
		else{
			$result = $this->db->insert('applicants', $data);
			return $result;
		}
	}
}