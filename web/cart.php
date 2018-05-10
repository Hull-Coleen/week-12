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

<?
foreach ($f as $fl)
{
	$flower_clean = htmlspecialchars($fl);
	echo "<p>$flower_clean</p>";
}
foreach ($flowers as $flower)
{
	$flower_clean = htmlspecialchars($flower);
	echo "<p>$flower_clean</p>";
}
?>

</body>
</html>
