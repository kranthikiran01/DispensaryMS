<?php if( !defined('BASEPATH')) exit('No direct script access allowed');
class Usersignup_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function add_user(){
		$regno=$this->input->post('regno');
		$pwd=$this->encryptIt($this->input->post('pwd'));
		$uname=$this->input->post('uname');
		$datas = array('EmpID' => $regno ,
					  'UserName' => $uname,
					  'Password' => $pwd,
					  'Occupation'=>$this->input->post('choice'),
		 );
		$this->db->insert('login',$datas);
		$sno=0;
		$query=$this->db->query("select max(Sno) as B from Users");
		$temp=0;
		foreach ($query->result() as $row) {
			$temp=$row->B;
		}
		if($temp==0){
			$sno=1;
		}
		else{
			$sno=$temp+1;
		}
		$db=$this->input->post('dateofbirth');
		$do=date_create($db);
		$datetime1=date_create($db);
		$datetime2=date_create('today');
		$interval=$datetime1->diff($datetime2);
		$age=$interval->y;
		$data=array(
		'Sno' =>$sno ,
		'RegNo'=>$this->input->post('regno'),
		'FirstName'=>$this->input->post('fname'),
		'MiddleName'=>$this->input->post('mname'),
		'LastName'=>$this->input->post('lname'),
		'Gender'=>$this->input->post('sex'),
		'BloodGroup'=>$this->input->post('bgroup'),
		'DateofBirth'=>date_format($do,'Y-m-d'),
		'Age'=>$age,
		'Type'=>$this->input->post('choice'),
		'PhoneNumber'=>$this->input->post('phno'),
		'Address'=>$this->input->post('address'),
		'email'=>$this->input->post('emailid'),
		 );
		$this->db->insert('Users',$data);	
	}

function encryptIt( $q ) {
    $cryptKey  = '5745b2d9552457192ccbfe3ebc53d491';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}
}
?>