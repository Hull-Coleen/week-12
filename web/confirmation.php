<?php
session_start();
$_SESSION["name"] = htmlspecialchars($_POST["name"]);
$_SESSION["email"] = htmlspecialchars($_POST["email"]);
$_SESSION["address"] = htmlspecialchars($_POST["address"]);
 
?>
<!DOCTYPE html>
<html>
<head>
<title>Confirmation Page</title>
</head>
<body>
    <p> <?php echo $_SESSION["name"] ?></p>
	<p>Your address is: <?php echo $_SESSION["address"] ?></p>
	<p>Your email is: <?php echo $_SESSION["email"] ?></p>
	
<?php
	foreach ($_SESSION["cart"] as $fl => $value)
{
	echo htmlspecialchars($fl);
	echo "<br>";
    echo htmlspecialchars($value);
	
} 
echo count($_SESSION["cart]);

?>
<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>
</body>
</html>