<?php


class RecepieModel extends BaseModel
{
	private $base; 

	function __construct() {
		$this->base = parent::__construct();
	}

	function getAll() {
		$result = $this->connection->query("SELECT id, name FROM recepies");
		
		$rows = array();
		while($row = $result->fetch_assoc())
			$rows[] = array("id" => $row['id'], "name" => $row['name']);
		return $rows;
	}

	function getOne($id) {
		$result = $this->connection->query("SELECT id, name, description, author FROM recepies WHERE id=".$id);
		$row = $result->fetch_assoc();
		return $row;
	}
}


?>