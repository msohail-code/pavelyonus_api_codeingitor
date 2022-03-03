<?php

/**
 * This is for api keys table
 */
class Vorgaben_flagbit_model extends CI_Model
{
	protected $table_name = "vorgaben_flagbit";
	protected $id = "flagbit_id";
	
	function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		return $this->db->get($this->table_name);
	}

	public function get_single($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->table_name);
	}

	public function insert($data)
	{
		return $this->db->insert($this->table_name, $data);
	}

	public function delete($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->table_name);
	}

	public function update($data, $id)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->table_name, $data);
	}





}