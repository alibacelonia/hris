<?php
class Auth_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function auth_check($username, $password)
    {
		
		$query = $this->db->select('*')
				->from('users')
				->group_start()
						->where('username', $username)
						->or_where('email',$username)
				->group_end()
		->get();
		
		$result = $query->row_array();

		if(password_verify($password,$result['password'])){
			return $result;
		}
		else{
			return null;
		}
	}
	
	
}