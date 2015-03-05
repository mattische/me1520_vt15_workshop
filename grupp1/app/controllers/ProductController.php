<?php


class ProductController
{
	
	private $model;

	function __construct() {
		$this->model = new ProductModel();

	}

	function showAll($cid) {
		$result = $this->model->getAll($cid);
		require_once("views/ProductView.php");
		//$this->model->close();
	}	

	function showSpecific($cid) {
		$result = $this->model->getSpecific($cid);
		require_once("views/ProductView.php");
		$this->model->close();
	}
}
?>