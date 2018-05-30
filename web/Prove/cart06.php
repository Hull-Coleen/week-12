<?php
session_start();
include_once('dbConnect.php');
$t = $_GET['_delete'];
if ($t > -1) {
	unset($_SESSION["cart"][$t]);
	
}
function getCart() {
    global $db;
    $query = 'SELECT f.description FROM flower f ,cart c WHERE f.flower_id = c.flower_id';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_NAMED);
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $e->getMessage();
        echo $e;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="Week06style.css">
</head>
<body>
<a href="Week06.php">Continue Shopping</a><br>
<a href="Week06checkout.php">Checkout</a>
<h1>Shopping Cart</h1><br><br>

<?php

foreach($_SESSION['cart'] as $x => $x_value) {	
	?>
	<p> <?php
   echo $x;
   
   ?>
   <br>
   <input type="text" placeholder="1" maxlength="4" size="4" id="<?php echo $x ?>" name="num">
   <?php
   echo "<br>";
   echo "<a href='{$_SERVER["PHP_SELF"]}?_delete={$x}'>Delete</a>";
   ?>
   </p>
   <?php
}
$cart = getCart();
foreach($cart as $c => $value ) {
	echo "cart" . $value;
}
?>

</body>
</html>