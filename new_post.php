<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("header.php");

include("db.php");

if(check_login()) {
    echo "<form action='new_post.php' method='post'>
    <input type='text' required name='heading'placeholder='Heading'><br>
    <textarea placeholder='Message' required name='body'></textarea><br>
    <input type='submit' value='Save' />
    </form>";
    
    if(isset($_POST['heading']))
    {
        $mysql = connect();

        $sql = "INSERT INTO posts (heading, body, username, created_at) VALUES('".$_POST['heading']."', '".$_POST['body']."','".$_SESSION['username']."', NOW())";
       $mysql->query($sql);
        header("Location: view_post.php?username=".$_SESSION['username']);
    }
    
}



?>