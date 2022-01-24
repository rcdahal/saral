<?php
class Queries extends CI_Model{
	public function getRoles(){
		$roles=$this->db->get('role');
				if($roles->num_rows()>0){
					return $roles->result();
				}
	}
	public function registerAdmin($data){
		$q=$this->db->insert('users',$data);
		return true;

	}
	public function checkAdmin(){
		$q=$this->db->where(['role_id'=>'1'])
					->get('users');
				if($q->num_rows()>0){
					return $q->num_rows();
				}
	}
	public function loginAdmin($email,$password){
		$chkdata=$this->db->where(['email'=>$email,'password'=>$password])
						->get('users');
				if ($chkdata->num_rows()>0) {
					return $chkdata->num_rows();
				}

	}
}





?>