<?php


class CategoryController
{
	
	private $model;

	function __construct() {
		$this->model = new CategoryModel();

	}

	function showAll() {
		$result = $this->model->getAll();
		require_once("views/CategoryView.php");
		//$this->model->close();
	}	

	function showSpecific($cid) {
		$result = $this->model->getSpecific($cid);
		require_once("views/CategoryView.php");
		$this->model->close();
	}
}
?>