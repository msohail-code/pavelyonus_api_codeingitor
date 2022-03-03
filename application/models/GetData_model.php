<?php /**
 * This is the products Model
 */
class GetData_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}


	public function get($table_name, $user_id_feild="", $user_id="")
	{
		if (!empty($user_id)) {
			$this->db->where($user_id_feild,$user_id);
		}
		return $this->db->get($table_name)->result();
	}

	
} ?>