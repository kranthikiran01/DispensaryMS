<?php if( !defined('BASEPATH')) exit('No direct script access allowed');
class Forgot_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
	}
	public function recoverpwd($uname)
	{
		$this->db->where("UserName",$uname);
		$query=$this->db->get("login");
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $rows) 
			{
				$newdata = array(
								'user_id' =>$rows->EmpID , 
								'user_name' => $rows->UserName,
								'user_occupation'=>$rows->Occupation,
								'user_password'=>$this->decryptIt($rows->Password),
							);	
			}
		return $newdata;
		}
	}
	public function recoverpwd1($regno,$dob)
	{
		$this->db->where("Regno",$regno);
		$query=$this->db->get("login");
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $rows) 
			{
				$newdata = array(
								'user_id' =>$rows->EmpID , 
								'user_name' => $rows->UserName,
								'user_occupation'=>$rows->Occupation,
								'user_password'=>$this->decryptIt($rows->Password),
							);	
			}
		return $newdata;
		}
	}
	function decryptIt( $q ) 
	{
    	$cryptKey  = '5745b2d9552457192ccbfe3ebc53d491';
    	$qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    	return( $qDecoded );
	}
}
?>