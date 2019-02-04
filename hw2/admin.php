<?php
    session_start();
    if(!isset($_SESSION["loggedIn"])){
       header("Location: login.php");
    }
    else {   //they are logged in
        $cookie_message = "You logged in " . $_COOKIE["loggedInCookie"];
    }
?>
<!DOCTYPE html>
<html lang='en'>
    <head> 
        <meta charset='utf-8' /> 
        <title>admin</title>
    </head>
    <body>
<?php
    if(!empty($cookie_message)){	
		echo $cookie_message. " <a href='login.php?logout=true' >Log out</a>"; 
    } 
?>    
    </body>
</html>