<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
		$this->load->model('queries');
		$chkadmin=$this->queries->checkAdmin();
		$this->load->view('home',['chkadmin'=>$chkadmin]);
	}
	public function adminRegister(){
		$this->load->model('queries');
		$roles=$this->queries->getRoles();
		$this->load->view('register',['roles'=>$roles]);
	}	
	public function login(){
		$this->load->view('login');
	}
	public function adminlogin(){
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
			if ($this->form_validation->run()) {
			$email=$this->input->post('email');
			$password=sha1($this->input->post('password'));
			$this->load->model('queries');
			$user=$this->queries->loginAdmin($email,$password);
			$this->load->view('home');
		}else{
				$this->login();
			}

	}
	public function adminSIgnup(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('role_id','Role','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('againpassword','Confirm Password','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if ($this->form_validation->run()) {
			$data=$this->input->post();
			$data['password']=sha1($this->input->post('password'));
			$data['againpassword']=sha1($this->input->post('againpassword'));
			$this->load->model('queries');
			if($this->queries->registerAdmin($data)){
				$this->session->set_flashdata('message','Admin Register Successfully');
				return redirect("welcome/adminRegister");
			}else{
				$this->session->set_flashdata('message','Admin Register Failed');
				return redirect("welcome/adminRegister");
			}
		}else{
				$this->adminRegister();
			}
	}
}
