<?php
include("db.php");

$sql = "SELECT id, heading, body, created_at, username FROM posts WHERE id=" . $_GET['pid'];
$mysqli = connect();

$result = $mysqli->query($sql);

while($obj = $result->fetch_object()) {
  echo "<h3>" . $obj->heading . "</h3> ";
  echo $obj->created_at . " by <br>" . $obj->username."<br>";
  echo $obj->body . "<br>";
}
?>