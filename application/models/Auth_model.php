<?php 

/**
 * This is for authentication 
 */
class Auth_model extends CI_Model
{
	$auth_key = "";
	$secrete_key = "";

	
	function __construct()
	{
		parent::__construct();
	}

	public function authenticate($a_key, $s_key)
	{
		if ($a_key == $this->auth_key && $s_key == $this->secrete_key) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}


}

 ?>