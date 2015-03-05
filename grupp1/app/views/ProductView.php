<?php

$url = "/workshop-php/grupp1/app";
for($i = 0; $i < count($result); $i++ ){
	echo "<a href='{$url}/index.php?ctrl=prod&prod=" . $result[$i]['id'] . "'>" . $result[$i]['name'] . "</a><br>";
}

?>