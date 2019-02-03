<?php
   // session_start();
    if($_SESSION["loggedIn"] != 'true' ){
       // header("login.php");
    }
    else {
   
            //they are logged in
    $cookie_message = "You logged in " . $_COOKIE["loggedInCookie"];

    }



?>

<!DOCTYPE html>
<html lang='en'>
    <head> 
        <meta charset='utf-8' /> 
        <title>admin</title>
        <script></script>
    </head>
    <body> <?php
            if(!empty($cookie_message)){	
				echo $cookie_message. " <a href='' >Log out</a>"; 
			} ?>
        
    </body>
</html>