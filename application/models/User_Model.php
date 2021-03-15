<?php
class User_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function get_user_details($data)
    {
		
		$query = $this->db->select('*')
				->from('users')
				->where('id',$data['id'])
				->get();
		
		$result = $query->row_array();
		return $result;
    }
	
	public function save_user_changes($id,$data)
    {
		$this->db->where('id', $id);
		$this->db->update('users',$data);
		return $result;
	}
	
	public function register_user($data)
    {
		$this->db->insert('users', $data);
		return array("message"=>"success");
    }
}