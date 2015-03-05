<?php
foreach($data as $item)
	echo "<a href=index.php?rip=".$item['id'].">".$item['name'] . "</a><br>";
?>