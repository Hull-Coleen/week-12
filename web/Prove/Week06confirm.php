<?php
session_start();
include_once('dbConnect.php');
$_SESSION['id'];
$user = getUserInfo($_SESSION['id']);	
$cart= getCart($_SESSION['id']);
?>
<!DOCTYPE html>
<html>
<head>
<title>Confirmation Page</title>
<link rel="stylesheet" type="text/css" href="Week06style.css">
</head>
<body>
<?php 
foreach ($user as $u) { ?>
    <p id="confirm" > <?php echo "Thank you for your purchase: " . $u['user_name'] ?></p>
	<p id="confirm" >Your purchase will be shippped to: <?php echo $u['address'] ?></p>
	<p id="confirm" >We will email you a confirmation number at: <?php echo $u['email'] ?></p>
<?php	
	
}

	foreach ($_SESSION["cart"] as $fl => $value)
    {
	?>
	<p id="confirm"> <?php echo htmlspecialchars($fl); ?> </p>
	<?php
	}
    // remove all session variables
    session_unset(); 

    // destroy the session 
    session_destroy(); 
?>
<?php
foreach ($cart as $c) { ?>
	<div ><p>
      <img id="cart" src="<?php echo $c['image'] ?>" alt="Flower">
      <?php echo $c['description'] ?><br />
	  <?php echo $c['flower_price']  ?><br />
	  </p> 
	  
    </div>
	<?php
}
?>
</body>
</html>