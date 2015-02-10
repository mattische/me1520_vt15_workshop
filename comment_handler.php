<?php
session_start();
include("header.php");
include("db.php");

if(!isset($_SESSION['username'])) {
    echo "You must be logged in to do that!";
    echo "<a href=index.php>Index</a>";
}


$mysql = connect();

$sql = "INSERT INTO comments (body, username, post_id) VALUES('".$_POST['comment']."','".$_SESSION['username']."',".$_POST['pid'].")";
$mysql->query($sql);
header("Location: view_post.php?pid=".$_POST['pid']);

?>