<?php 
error_reporting(E_ALL & ~E_NOTICE);

    if($_GET["user"] == "admin" && $_GET["password"]== "password"){
        if($_SESSION["loggedIn"] == 'true'){
            header("Location: admin.php");
        }
        else {
            session_start();
            $_SESSION["loggedIn"] = 'true';
        }
        $next_10_min= time() + 10 * 60;
        setcookie("loggedInCookie", date("F j, Y g:i a"), $next_10_min);
          //  echo $_SESSION["loggedIn"];
        header("Location: admin.php");        
    }
    else {
        $invalid_login ="<h3>invalid login </h3>";
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