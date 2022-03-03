<?php 
/**
 * This is GET API
 */
class GetData extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("GetData_model");
	}


	public function get($table_name="", $user_id_feild="", $user_id="")
	{
		header('Access-Control-Allow-Origin: *');
  		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		if (!empty($table_name)) 
		{
			if (!empty($user_id)) {

				
				
				
				$data =  $this->GetData_model->get($table_name,$user_id_feild,$user_id);
			}
			else{
				$data = $this->GetData_model->get($table_name);
			}

			echo json_encode($data);
		}
		else 
		{
			http_response_code(404);
		}
	}
}
 ?>