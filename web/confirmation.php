<?php
session_start();
$_SESSION["name"] = htmlspecialchars($_POST["name"]);
$_SESSION["email"] = htmlspecialchars($_POST["email"]);
$_SESSION["adress"] = htmlspecialchars($_POST["address"]);


?>
<!DOCTYPE html>
<html>
<head>
<title>Confirmation Page</title>
</head>
<body>
<p>Your name is: <?=$name ?></p>
	<p>Your email is: <a href="mailto:<?=$email ?>"><?=$email ?></a></p>
	<p>Your adress is: <?=$address ?></p>
<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>
</body>
</html>