<?php
session_start();
include_once('dbConnect.php');
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

foreach ($cart as $c) { ?>
	<div ><p>
      <img id="cart" src="<?php echo $c['image'] ?>" alt="Flower">
      <?php echo $c['description'] ?><br />
	  <?php echo $c['flower_price']  ?><br />
	  </p> 
	  
    </div>
	<?php
}

 if(isset($_POST['submit'])) {
    echo "Thanks for your purchase";
    deleteUserCart($_SESSION['id']);
	// remove all session variables
    session_unset(); 

    // destroy the session 
    session_destroy();	
	echo $_SESSION['id'];
                
}
?>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
<p><input type="submit" name="submit" value="Confirm Transaction"></p>
</form>
</body>
</html>