<php
$flowers = $_POST["flowers"];
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
	$flower_clean = htmlspecialchars($flower);
	echo "<p>$flower_clean</p>";
}
?>

</body>
</html>
