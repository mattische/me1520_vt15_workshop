<?php
session_start();
include("header.php");
include("db.php");

$sql = "";

if(isset($_GET['pid']))
    $sql = "SELECT id, heading, body, created_at, username FROM posts WHERE id=" . $_GET['pid'];
elseif(isset($_GET['username']))
    $sql = "SELECT id, heading, body, created_at, username FROM posts WHERE username='" . $_GET['username']."'";


$mysqli = connect();

$result = $mysqli->query($sql);

while($obj = $result->fetch_object()) {
  echo "<h3>" . $obj->heading . "</h3> ";
  echo $obj->created_at . " by <br>" . $obj->username."<br>";
  echo $obj->body . "<br><br>";
}

//COMMENT FORM
if(isset($_SESSION['username'])) {
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