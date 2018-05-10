<?php
session_start();
?>

<?php
$flowers = $_POST["flower"];
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<?
foreach ($flowers as $f) {
	echo $flowers[$key] . ", ";
}
foreach ($flowers as $flower)
{
	$flower_clean = htmlspecialchars($flower);
	echo "<p>$flower_clean</p>";
}
?>

</body>
</html>
