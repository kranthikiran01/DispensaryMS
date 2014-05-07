<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forgot extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Forgot_model');
	}
	public function index()
	{
		if(($this->session->userdata('user_name')!=""))
		{

			$this->welcome();
		}
		else
		{
			$data['title']='Forgot Password?';
			$this->load->view("forgot_view.php",$data);
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

	public function recover()
	{
			$this->load->library('email');
		if($this->input->post('uname')!='')
		{
			$uname=$this->input->post('uname');
			$one=($this->Forgot_model->recoverpwd($uname));
			$this->email->from('guduru.kranthikiran@gmail.com','GuduruKranthiKiran');
			$this->email->to('kranthikiran.rockzdhrtz@gmail.com');
			$this->email->subject('Email Test');
			$this->email->message('$one[\'user_password\']');
			$this->email->send();
			echo $this->email->print_debugger();
			$this->load->view('forgot_view');
		}
		elseif (($this->input->post('regno')!='') && ($this->input->post('dob')!='')) {
			$regno=$this->input->post('regno');
			$dob=$this->input->post('dob');
			$this->session->set_userdata($this->Forgot_model->recoverpwd1($regno,$dob));
			$this->load->view('forgot_view');
		}
	}
}
?>