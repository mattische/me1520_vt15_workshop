<?php
class BaseController
{
	function render($folder, $file, $data) {
		require_once("view/".$folder."/".$file.".php");
	}
}
?>