<php
$flowers = $_POST["flower"];
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?
foreach ($flowers as $flower)
{
	$flower_clean = htmlspecialchars($flowers);
	echo "<p>$flower_clean</p>";
}
?>

</body>
</html>
