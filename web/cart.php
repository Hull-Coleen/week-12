<?php
session_start();
//array_push($_SESSION["cart"], $_SESSION["item"]);
$_SESSION["item"] = htmlspecialchars($_POST["item"]);
if (!empty($_POST["item"])) {
	array_push($_SESSION["cart"], $_POST["item"]);
}
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="Prove03style.css">
</head>
<body>
<a href="/Prove03.php">Continue Shopping</a>
<a href="/checkout.php">Checkout</a>
<h1>Shopping Cart</h1>

<?php
echo $_SESSION["item"];
	//foreach ($_SESSION["cart"] as $fl => $value)
//{
	//echo htmlspecialchars($fl);
	//echo "<br>";
    //echo htmlspecialchars($value);
	
//} 
echo count($_SESSION["cart"]);

?> 
<?php
foreach ($_SESSION["cart"] as $fl)
{
	$flower_c = htmlspecialchars($fl);
	echo "<p>$flower_c</p>";
}

?>

</body>
</html>
