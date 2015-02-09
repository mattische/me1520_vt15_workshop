<?php


function connect($host="localhost",  $user="bloguser", $pw="blogblog", $db="blog") {
   $mysqli = new mysqli($host, $user, $pw, $db);
   if ($mysqli->connect_errno) {
      //echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      return false;
    }
  
  return $mysqli;
}
?>