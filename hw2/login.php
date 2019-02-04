<?php 
error_reporting(E_ALL & ~E_NOTICE);
//if username and password are correct
session_start();

    if($_GET["user"] === "admin" && $_GET["password"]=== "password"){
        //create session value,create cookie and redirect to admin.php
        $_SESSION["loggedIn"] = 'true';
        $next_10_min= time() + 10 * 60;
        setcookie("loggedInCookie", date("F j, Y g:i a"), $next_10_min);
        header("Location: admin.php");
             
    } 

    if($_GET["logout"] == 'true'){
        $invalid_login = "<h3>Logged out successfully</h3>";
        unset($_SESSION["loggedIn"]);
        unset($_COOKIE["loggedInCookie"]);
        setcookie(session_name(), "",1,"/" );
        setcookie("loggedInCookie", "",1,"/~ak6709/756/homework" );
        session_destroy();
    }
  
    else {
        $invalid_login ="<h3>invalid login </h3>";
    }
    if($_SESSION["loggedIn"] === 'true'){
        header("Location: admin.php");
        exit;
       }
    

?>

<!DOCTYPE html>
<html lang='en'>
    <head> 
        <meta charset='utf-8' /> 
        <title>login</title>
        <script></script>
    </head>
    <body> 
         <?php
			if(!empty($invalid_login)){	
				echo $invalid_login;
			}
		?>
    </body>
</html>