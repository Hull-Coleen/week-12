<?php
session_start();
?>

<?php
$flowers = $_POST["flower"];
$_SESSION["cart"] = $_POST["flower"];
$f = $_SESSION["cart"];

?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<a href="/Prove03.php">Continue Shopping</a>
<a href="/checkout.php">Checkout</a>
<?
foreach ($_SESSION["cart"] as $fl)
{
	$flower_c = htmlspecialchars($fl);
	echo "<p>$flower_c</p>";
}
foreach ($flowers as $flower)
{
	$flower_clean = htmlspecialchars($flower);
	echo "<p>$flower_clean</p>";
}
?>

</body>
</html>
