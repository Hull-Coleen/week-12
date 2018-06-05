<?php
session_start();
include_once('dbConnect.php');

$id = $_SESSION["id"];
$t = $_GET['_delete'];

if (!empty($t)) {
	deleteFromCart($_SESSION["id"], $t);
}

$cart= getCart($id);
// testing to see if this changes other file
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
	<div ><form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>""><p>
      <img id="cart" src="<?php echo $c['image'] ?>" alt="Flower">
      <?php echo $c['description'] ?><br />
	  <?php echo $c['flower_price']  ?><br />
	  <?php echo "<a href='{$_SERVER["PHP_SELF"]}?_delete={$c['flower_id']}'>Delete</a>"; ?>
	  <input type="number" placeholder="1" id="<?php echo $c['flower_id'] ?>"
	  name="<?php echo $c['flower_id'] ?>">
  <span id='message'></span><input type="submit" name="update" value="Update">
  
	  </p> 
	 </form> 
    </div>
	<?php
	if (!empty($_POST[$c['flower_id']])) {
	     updateCart($_SESSION['id'], $c['flower_id'], $_POST[$c['flower_id']]); 
	}
}

?>
<a href="Week06confirm.php">Complete Transaction</a><br>

</body>
</html>