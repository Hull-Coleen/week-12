
<?php
session_start();
include_once('dbConnect.php');
$_SESSION["item"] = $_POST["item"];
$description = $_SESSION["item"];
$price;
$image = world.jpg;
$statement = $db->prepare("SELECT flower_price, image FROM flower WHERE description = $description");
$statement->execute();
$price = $statement->fetch()['flower_price'];
$image = $statement->fetch()['image'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Info Page</title>
<style>
</style>
<link rel="stylesheet" type="text/css" href="Prove03style.css">
</head>
<body>
<a href="/Prove05.php">Continue Shopping</a><br>

<h1>Product Information</h1><br>
<img src="<?php echo $image; ?>"  alt="World"> 
	   

</body>
</html>