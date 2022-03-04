<?php 

/**
 * this for the API_Vorgaben_zeitraum_model table
 */
class Vorgaben_zeitraum extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Vorgaben_zeitraum_model");
		$this->load->model("Auth_model");
	}

	public function index($value='')
	{
		$ourdata = $this->Vorgaben_zeitraum_model->get()->result();

		echo json_encode($ourdata);
	}

	public function delete($id="")
	{
		if (!empty($id)) 
		{
			$present = $this->Vorgaben_zeitraum_model->get_single($id)->num_rows();
			if ($present) 
			{
				if($this->Vorgaben_zeitraum_model->delete($id))
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

	public function add()
	{
		if(!empty($_POST)){
			if (empty($_POST['auth_key'] or empty($_POST['secret_key']))) 
			{
				echo "Your are not allowed";
				exit;
			} 
			else
			{
				if (!$this->Auth_model->authenticate($_POST['auth_key'], $_POST["secret_key"])) 
				{
					echo "Your are not allowed";
					exit;
				}
			}
			$data = [];
			foreach ($_POST as $key => $value) {
				$data[$key] = $value;
			}

			

			$insert_run = $this->Vorgaben_zeitraum_model->insert($data);
			if($insert_run)
			{
				echo "Data has been inserted Successfully!!!";
			
				
			}else{
				echo "We are facing some issue inserting data in database";
			}
		} 
		else
		{
			echo "Get Method cannot allowed *";
		}		
	}


	public function update($id)
	{
		if (!empty($id)) 
		{
			if (empty($_POST['auth_key'] or empty($_POST['secret_key']))) 
			{
				echo "Your are not allowed";
				exit;
			} 
			else
			{
				if (!$this->Auth_model->authenticate($_POST['auth_key'], $_POST["secret_key"])) 
				{
					echo "Your are not allowed";
					exit;
				}
			}
			// code...
			$present = $this->Vorgaben_zeitraum_model->get_single($id)->num_rows();
			if($present)
			{


				if(!empty($_POST)){
					$data = [];
					foreach ($_POST as $key => $value) {
						$data[$key] = $value;
					}

					$insert_run = $this->Vorgaben_zeitraum_model->update($data,$id);
					if($insert_run)
					{
						echo "Data has been Updated";				
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