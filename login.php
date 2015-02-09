<?php
session_start();
if(strlen($_POST['username']) > 3 && strlen($_POST['pass']) > 3)
{
    include("db.php");
    $mysqli = "";  
    $mysqli = connect();
    if(!$mysqli) {
      echo "Databasproblem <a href=index.php>Tillbaka till index</a>.";
      exit();
    }
  
    $res = $mysqli->query("SELECT username, password FROM users WHERE username='".$_POST['username']."' AND password='".$_POST['pass']."'");

   if($res->num_rows == 1)
     {
       $_SESSION['username'] = $_POST['username'];
       echo "HOOOOORAY";
    }
    for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
      $row = $res->fetch_assoc();
      echo " Welcome " . $row['username'] . "\n";
    }
}
else
  echo "NOT OK";
?>
