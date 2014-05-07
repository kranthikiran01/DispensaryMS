<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
class Signup extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usersignup_model');
	}
	public function index()
	{
		if(($this->session->userdata('user_regno')!=""))
		{
			$this->welcome();
		}
		else
		{
			$data['title']='Signup Page';
			$this->load->view("signup_view.php",$data);
			
		}
	}
	public function welcome()
	{
		$data['title']='Welcome';
		$this->load->view('header_view',$data);
		$this->load->view('welcome_view.php',$data);
		$this->load->view('footer_view',$data);
	}
	public function thank()
	{
		$data['title']='Thank';
		$this->load->view('header_view',$data);
		$this->load->view('thank_view',$data);
		$this->load->view('footer_view',$data);
	}
	public function signup()
	{	
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('regno','Registration Number','required');
		$this->form_validation->set_rules('pwd','Password','required');
		$this->form_validation->set_rules('con_password','Password Confirmation','required|matches[pwd]');

		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}		
		else
		{
			$this->Usersignup_model->add_user();
			$this->thank();
		}
	}
}
?>