<?php
session_start();
include("db.php");



$sql = "SELECT id, heading, body, created_at, username FROM posts WHERE id=" . $_GET['pid'];
$mysqli = connect();

$result = $mysqli->query($sql);

while($obj = $result->fetch_object()) {
  echo "<h3>" . $obj->heading . "</h3> ";
  echo $obj->created_at . " by <br>" . $obj->username."<br>";
  echo $obj->body . "<br><br>";
}

//COMMENT FORM
if(isset($_SESSION['username'])) {
    echo "<form action='xyz.php' method='post'>
    <textarea name='comment'></textarea><br>
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