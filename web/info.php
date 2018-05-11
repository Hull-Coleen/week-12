<?php
session_start();
$test;

?>
<!DOCTYPE html>
<html>
<head>
<title>Info Page</title>
</head>
<body>
    
<script>
//$test = document.getElementById("myVar").value;
</script>	
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$_SESSION["item"] = $_POST[$name];
}
 echo $_SESSION["item"];

?>

</body>
</html>