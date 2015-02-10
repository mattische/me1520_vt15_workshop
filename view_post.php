<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("header.php");
include("db.php");

$sql = "";
$mysqli = connect();

if(isset($_GET['pid']))
    $sql = "SELECT id, heading, body, created_at, username FROM posts WHERE id=" . $_GET['pid'];
elseif(isset($_GET['username']))
    $sql = "SELECT id, heading, body, created_at, username FROM posts WHERE username='" . $_GET['username']."' ORDER BY created_at DESC";

if(isset($_GET['delete_id']) && isset($_GET['username']) && check_login())
{
   
    if($_GET['username'] == $_SESSION['username'])
     {
        $mysqli->query("DELETE FROM comments WHERE post_id=".$_GET['delete_id']);
        $mysqli->query("DELETE FROM posts WHERE id=".$_GET['delete_id']);
     }
}



$result = $mysqli->query($sql);

while($obj = $result->fetch_object()) {
  echo "<h3>" . $obj->heading . "</h3> ";
  echo $obj->created_at . " by <br>" . $obj->username."<br>";
  echo $obj->body . "<br><br>";
  if(check_login() && ($_SESSION['username'] == $obj->username))
    echo "<a href=view_post.php?delete_id=".$obj->id."&username=". $obj->username.">delete post</a>";
}

//COMMENT FORM
if(isset($_SESSION['username'])) {//TO-OD: IF DELETE POST, THEN pid IS NOT HERE
    echo "<form action='comment_handler.php' method='post'>
    <input type='hidden' name='pid' value='". $_GET['pid']."'>
    <textarea required name='comment'></textarea><br>
    <input type='submit' value='comment' />
    </form>";
}
//END COMMENT FORM




$comment_sql = "SELECT created_at, username, body FROM comments WHERE post_id=" . $_GET['pid'];
$result = $mysqli->query($comment_sql);

while($obj = $result->fetch_object()) {
  echo "------------------------<br>@" . $obj->created_at . " " . $obj->username . " said:<br>";
  echo $obj->body . "<br>";
}



?>