<?php 

/**
 * this for the API_api_keys table
 */
class Api_apikeys extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Api_keys");
	}

	public function index($value='')
	{
		$ourdata = $this->Api_keys->get()->result();

		echo json_encode($ourdata);
	}

	public function add()
	{
		if(!empty($_POST)){
			$data = [];
			foreach ($_POST as $key => $value) {
				$data[$key] = $value;
			}

			if (!empty($_FILES)) 
			{
				// code...
				$tmp_names = [];
				foreach ($_FILES as $f_key => $f_value) {
					$data[$f_key] = $f_value["name"];
					$tmp_names[$f_key] = $f_value["tmp_name"];
				}
				 // print_r($tmp_names);				
			}

			$insert_run = $this->Api_keys->insert($data);
			if($insert_run)
			{
				echo "Data has been inserted Successfully!!!";
				if(!empty($tmp_names))
				{
					foreach ($tmp_names as $u_key => $u_value) 
					{
						$file_name = $data[$u_key];
						echo $file_tmp = $u_value;
						move_uploaded_file($file_tmp, "assets/images/uploads".$file_name);
					}
				}
				
			}else{
				echo "We are facing some issue inserting data in database";
			}
		} 
		else
		{
			echo "Get Method cannot allowed *";
		}

		
		

		
	}



	public function delete($id="")
	{
		if (!empty($id)) 
		{
			$present = $this->Api_keys->get_single($id)->num_rows();
			if ($present) 
			{
				if($this->Api_keys->delete($id))
				{
					echo "Data has been deleted";
				} 
				else{
					echo "We are facing any issue";
				}
			}
			else
			{
				echo "There is no data present";
			}
		} 
		else
		{
			echo "No data present";
		}
	}


	public function update($id)
	{
		if (!empty($id)) 
		{
			// code...
			$present = $this->Api_keys->get_single($id)->num_rows();
			if($present)
			{


				if(!empty($_POST)){
					$data = [];
					foreach ($_POST as $key => $value) {
						$data[$key] = $value;
					}

					if (!empty($_FILES)) 
					{
						// code...
						$tmp_names = [];
						foreach ($_FILES as $f_key => $f_value) {
							$data[$f_key] = $f_value["name"];
							$tmp_names[$f_key] = $f_value["tmp_name"];
						}
						 // print_r($tmp_names);				
					}

					print_r($data);


					$insert_run = $this->Api_keys->update($data,$id);
					if($insert_run)
					{
						echo "Data has been Updated";
						if(!empty($tmp_names))
						{
							foreach ($tmp_names as $u_key => $u_value) 
							{
								$file_name = $data[$u_key];
								echo $file_tmp = $u_value;
								move_uploaded_file($file_tmp, "assets/images/uploads".$file_name);
							}
						}
						
					} 
					else
					{
						echo "We are facing some issue with updating data";
					}
				} 
				else
				{
					echo "Get Method cannot allowed *";
				}

				
				
			}
			else
			{

					echo "No data present";
			}
		} 
		else
		{
			echo "No data present";
		}

	}


}

 ?>