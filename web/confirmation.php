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
<link rel="stylesheet" type="text/css" href="Prove03style.css">
</head>
<body>
    <p> <?php echo "Thank you for your purchase: " . $_SESSION["name"] ?></p>
	<p>Your purchase will be shippped to: <?php echo $_SESSION["address"] ?></p>
	<p>We will email you a confirmation number at: <?php echo $_SESSION["email"] ?></p>
	
<?php
	foreach ($_SESSION["cart"] as $fl)
{
	echo htmlspecialchars($fl);
	//echo "<br>";
    //echo htmlspecialchars($value);
	
} 
echo count($_SESSION["cart"]);

?>
<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>
</body>
</html>