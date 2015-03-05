<?php
class RecepieController extends BaseController
{
	private $model;

	function __construct() 
	{
		$this->model = new RecepieModel();
	}

	function getAll() {
		$recepies = $this->model->getAll();
		$this->render("recepies", "show", $recepies);
	}

	function getOne($id) {
		$recepie = $this->model->getOne($id);
		$this->render("recepies", "recepie", $recepie);
	}

	
}


?>