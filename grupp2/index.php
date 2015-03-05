<?php
ini_set('display_errors','on');
include("config/includes.php");



$rm = new RecepieModel();
print_r($rm->getAll());
?>
