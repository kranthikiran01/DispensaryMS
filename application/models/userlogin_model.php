<?php if( !defined('BASEPATH')) exit('No direct script access allowed');
class Userlogin_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function login($uname,$pwd){
		//$uname=$this->$input->post('uname');
		//$pwd=md5($this->input->post('pwd'));
		$this->db->where("UserName",$uname);
		$this->db->where("Password",$this->encryptIt($pwd));

		$query=$this->db->get("login");
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $rows) 
			{
				$newdata = array(
								'user_id' =>$rows->EmpID , 
								'user_name' => $rows->UserName,
								'user_occupation'=>$rows->Occupation,
								'logged_in'=>TRUE,
							);	
			}
		$this->session->set_userdata($newdata);
		return true;
		}
		return false;
	}

function encryptIt( $q ) {
    $cryptKey  = '5745b2d9552457192ccbfe3ebc53d491';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}	
}
?>