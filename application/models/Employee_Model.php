<?php
class Employee_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_employees()
    {
		
		$query = $this->db->select("id,CONCAT(firstname,' ', SUBSTR(middlename,1,1),'. ', lastname) AS name, sex, birthdate, position, date_hired, employee_type as type, status,leave_credits as credits,date_updated")
				->get('employees');
		
		$result = $query->result_array();
		return $result;
	}

	public function get_applicants()
    {
		
		$query = $this->db->select("id,CONCAT(firstname,' ', SUBSTR(middlename,1,1),'. ', lastname) AS name, sex, birthdate, position, application_date,status,date_updated")
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