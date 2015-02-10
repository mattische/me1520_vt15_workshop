<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("db.php");
echo "WELCOME TO DA AMAZING BLOGZER<br>
<form action='login.php' method='post'>
Username:<br>
<input required type='text' name='username' />
<br>
password:<br>
<input required type='password' name='pass' />
<br />
<input type='submit' value='login' />

</form>";


$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$mysqli = connect();

$result = $mysqli->query($sql);

while($obj = $result->fetch_object()) {
  echo "<h3>" . $obj->heading . "</h3> ";
  echo $obj->created_at . " by <br>" . $obj->username."<br>";
  echo $obj->body . "<br>";
  echo "<a href=comment.php>comment</a>";
}
/* This is not a comment, please try later */
?>