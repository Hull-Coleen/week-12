<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Info Page</title>
</head>
<body>
<a href="/Prove03.php">Continue Shopping</a>
<a href="/cart.php">Cart</a>	
<?php
//$_SESSION["item"] = $_POST["name"];
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$_SESSION["item"] = $_POST["item"];
	$_SESSION["num"] = $_POST["num"];

 echo $_SESSION["item"];
 echo $_SESSION["num"];
 $_SESSION["cart"] += [$_SESSION["item"] => $_SESSION["num"]];
 $_SESSION["cart"] = array_push_assoc($_SESSION["cart"], $_SESSION["item"] , $_SESSION["num"]);
 //$_SESSION["cart"]_push($$_SESSION["item"], $_SESSION["num"]);
 //array_push($data,$question);

?>

</body>
</html>