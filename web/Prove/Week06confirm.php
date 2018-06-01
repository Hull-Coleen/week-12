<?php
session_start();
include_once('dbConnect.php');
$_SESSION["name"] = htmlspecialchars($_POST["name"]);
$_SESSION["email"] = htmlspecialchars($_POST["email"]);
$_SESSION["address"] = htmlspecialchars($_POST["address"]);
$name = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);

$stmt = $db->prepare("SELECT user_name FROM public.user WHERE (user_user_name = '{$name}')
AND user_password = '{$password}';");
$stmt->execute();
$userName = $stmt->fetch()['user_name'];

if (htmlspecialchars($_POST["name"]) == "") {
	$name1 = $userName;
}
else {
	$name1 = $_SESSION["name"];
}
$user = getUserInfo($_SESSION['id']);	
 
?>
<!DOCTYPE html>
<html>
<head>
<title>Confirmation Page</title>
<link rel="stylesheet" type="text/css" href="Week06style.css">
</head>
<body>
    <p id="confirm" > <?php echo "Thank you for your purchase: " . $user['user_name'] ?></p>
	<p id="confirm" >Your purchase will be shippped to: <?php echo $user['address'] ?></p>
	<p id="confirm" >We will email you a confirmation number at: <?php echo $user['email'] ?></p>
	
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