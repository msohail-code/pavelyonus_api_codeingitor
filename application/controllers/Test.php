<?php 

/**
 * This is for testing purpose only
 */
class Test extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Api_keys");
	}


	public function index($value='')
	{
		echo "<pre>";
		print_r($this->Api_keys->get()->num_rows());
		echo "working";
	}
}
 ?>