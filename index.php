<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("header.php");

include("db.php");



$sql = "SELECT id, heading, created_at, username FROM posts ORDER BY created_at DESC";
$mysqli = connect();

$result = $mysqli->query($sql);

while($obj = $result->fetch_object()) {
  echo "<h3>" . $obj->heading . "</h3> ";
  echo $obj->created_at . " by <br><a href=view_post.php?username=" . $obj->username.">".$obj->username."</a><br>";
  echo "<a href=view_post.php?pid=".$obj->id.">view post</a>";
}
?>