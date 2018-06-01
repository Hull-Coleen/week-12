<?php
session_start();
include_once('dbConnect.php');

$id = $_SESSION["id"];
$t = $_GET['_delete'];

if (!empty($t)) {
	deleteFromCart($_SESSION["cart"], $t);
}

$cart= getCart($id);

?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="Week06style.css">
</head>
<body>
<a href="Week06.php">Continue Shopping</a><br>

<h1>Shopping Cart</h1><br><br>

<?php
foreach ($cart as $c) { ?>
	<div ><p>
      <img id="cart" src="<?php echo $c['image'] ?>" alt="Flower">
      <?php echo $c['description'] ?><br />
	  <?php echo $c['flower_price']  ?><br />
	  <?php echo "<a href='{$_SERVER["PHP_SELF"]}?_delete={$c['flower_id']}'>Delete</a>"; ?>
	  </p> 
	  
    </div>
	<?php
}
?>
<a href="Week06confirm.php">Complete Transaction</a><br>

</body>
</html>