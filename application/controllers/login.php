<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Userlogin_model');
	}
	public function index()
	{
		if(($this->session->userdata('user_name')!=""))
		{

			$this->welcome();
		}
		else
		{
			$data['title']='Login Page';
			$this->load->view("login_view.php",$data);
			
		}
	}
	public function welcome()
	{
		$data['title']='NITW DispensaryMS';
		if($this->session->userdata('user_occupation')==1)
			$this->load->view('student_view.php',$data);
		else if($this->session->userdata('user_occupation')==2)
			$this->load->view('employee_view.php',$data);
		else if($this->session->userdata('user_occupation')==3)
			$this->load->view('doctor_view.php',$data);
		//$this->load->view('header_view',$data);
		//$this->load->view('footer_view',$data);
	}
	public function login()
	{
		$uname=$this->input->post('uname');
		$pwd=$this->input->post('pwd');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname','UserName','required');
		$this->form_validation->set_rules('pwd','Password','required');
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}		
		else
		{
		$result=$this->Userlogin_model->login($uname,$pwd);
		if($result) $this->welcome();
		else 		$this->index();
		}
	}
	public function logout()
	{
		$newdata= array
		( 
		'user_regno'=>'',
		'user_empid'=>'',
		'user_type'=>'',
		'logged_in'=>FALSE,
		);
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		$this->index();
	}
}
