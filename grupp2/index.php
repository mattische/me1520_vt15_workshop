<?php
ini_set('display_errors','on');
include("config/includes.php");


//HUR SKA VI KUNNA 'LADDA' ANDRA Controllers?
//Kanske titta på switch?

$rc = new RecepieController();
$rc->getAll();

$rc = new UserController();
$rc->getAll();

$rc = new RestaurantController();
$rc->getAll();




if(!empty($_GET))
{
	$rc->getOne($_GET['rip']);
}

?>
