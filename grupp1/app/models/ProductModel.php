<?php
class ProductModel extends BaseModel
{
	function __construct() {
		parent::__construct();
	}

	function getAll($cid) {
		$res = $this->connection->query("SELECT id, name FROM products WHERE category_id=".$cid);
		$rows = array();
		while($row = $res->fetch_assoc())
			$rows[] =  array('id' => $row["id"], 'name' => $row["name"]);

		return $rows;
	}

	function getSpecific($cid) {
		echo "SELECT id, name FROM categories WHERE id=".$cid;
		$res = $this->connection->query("SELECT id, name FROM categories WHERE id=".$cid);
		$rows = array();
		while($row = $res->fetch_assoc())
			$rows[] =  array('id' => $row["id"], 'name' => $row["name"]);

		return $rows;
	}
}


?>