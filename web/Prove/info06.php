
<?php
session_start();
//include_once('dbConnect.php');
require "dbConnect.php";
$_SESSION["item"] = htmlspecialchars($_POST["item"]);
$description = $_SESSION["item"];
$price;
   
$stmt = $db->prepare("SELECT flower_price, image FROM flower WHERE (description = '{$description}');");
$stmt->execute();
$_SESSION['price'] = $stmt->fetch()['flower_price'];
	
$stmt2 = $db->prepare("SELECT image FROM flower WHERE (description = '{$description}');");
$stmt2->execute();
$image = $stmt2->fetch()['image'];
if ($image != "") {
$_SESSION['image'] = $image;
}
else {
	$_SESSION['image'] = "RedF.jpg"; 
}
function getId($flower_id) {
    global $db;
	$stmt2 = $db->prepare("SELECT flower_id FROM flower WHERE (description = '{$flower_id}');");
    $stmt2->execute();
    $id = $stmt2->fetch()['flower_id'];
	return $id;
	
}
function addCart($_SESSION["id"], $flower_id) {
	global $db;
    try {
        $query = "INSERT INTO cart (user_id, flower_id)
            VALUES ($_SESSION["id"], $flower_id)";
        $db->exec($query);
    } catch (PDOException $e) {
        $e->getMessage();
        echo $e;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Info Page</title>
<style>
</style>
<link rel="stylesheet" type="text/css" href="Week06style.css">
</head>
<body>
<a href="Week06.php">Continue Shopping</a><br>
<a href="cart06.php">Cart</a><br>

<h1>Product Information</h1><br>
<img id ="flower" src="<?php echo $_SESSION['image']; ?>"  alt="World">
 <?php 

 if (!empty(htmlspecialchars($_POST["item1"]))) {
	 $_SESSION["cart"] += array($_POST["item1"] => 1);
 $id = getId($_SESSION["id"], $_POST["item1"]);
	 //echo "info page" . $id;
	 addCart($id);
 
 }
?>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
  <input type="hidden" id="address" name="item1" value="<?php echo htmlspecialchars($description); ?>">
  <p> <?php echo htmlspecialchars($description);
	        echo "<br>";
			echo $_SESSION['price']; ?> <br>
    <input type="submit" name="submit" value="Add to Cart">  
  </p>
</form>
	  

</body>
</html>