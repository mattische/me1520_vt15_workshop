<?php
ini_set('display_errors','on');
include("config/includes.php");





if(!empty($_GET)) {

	$controller = $_GET['ctrl'];
	switch($controller) {
		case "cat":
			echo "CAT";
			$cc = new CategoryController();
			$cc->showAll();
			break;
		case "prod":
			echo "PROD";
			$pc = new ProductController();
			$pc->showAll($_GET['cat']);
			break;
		default:
			echo "def";
			$cc = new CategoryController();
			$cc->showAll();
	}

}
else{
	$cc = new CategoryController();
	$cc->showAll();
}

	//$cc->showSpecific($_GET['cat']);
	
?>
