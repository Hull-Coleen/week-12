<?php
session_start();
include_once('dbConnect.php');
$_SESSION["name"] = htmlspecialchars($_POST["name"]);
$_SESSION["email"] = htmlspecialchars($_POST["email"]);
$_SESSION["address"] = htmlspecialchars($_POST["address"]);
$name = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["email"]);
$stmt = $db->prepare("SELECT username FROM public.user WHERE (user_user_name = '{$name}')
AND password = '{$password}';");
$stmt->execute();
$userName = $stmt->fetch()['user_name'];
if (empty(htmlspecialchars($_POST["name"]))  && !empty(htmlspecialchars($userName))) {
	$name1 = $userName;
}
else {
	$name1 = $_SESSION["name"];
}
	
 
?>
<!DOCTYPE html>
<html>
<head>
<title>Confirmation Page</title>
<link rel="stylesheet" type="text/css" href="Week05style.css">
</head>
<body>
    <p id="confirm" > <?php echo "Thank you for your purchase: " . $name1 ?></p>
	<p id="confirm" >Your purchase will be shippped to: <?php echo $_SESSION["address"] ?></p>
	<p id="confirm" >We will email you a confirmation number at: <?php echo $_SESSION["email"] ?></p>
	
<?php
	foreach ($_SESSION["cart"] as $fl => $value)
    {
	?>
	<p id="confirm"> <?php echo htmlspecialchars($fl); ?> </p>
	<?php
	}
    // remove all session variables
    session_unset(); 

    // destroy the session 
    session_destroy(); 
?>
</body>
</html>