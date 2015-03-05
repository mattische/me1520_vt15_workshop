<?php

class BaseModel 
{
	private $db;
	protected $connection;

	function __construct() {
		$this->db = new DBCon();
		$this->connection = $this->db->getCon();
	}
}


?>