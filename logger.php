<?php
function check_login()
{
    return isset($_SESSION['username']);
}

function login_form()
{
    if(!check_login()) {
       return  "<form action='login.php' method='post'>
        Username:<br>
        <input required type='text' name='username' />
        <br>
        password:<br>
        <input required type='password' name='pass' />
        <br />
        <input type='submit' value='login' />
        
        </form>";
    }
    return "<form action='logout.php' method='post'>
        logged in as ".$_SESSION['username']."

        <input type='submit' value='logout' />
        
        </form>";
}

?>