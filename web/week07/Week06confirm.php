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
<script>
var total;
</script>
foreach ($cart as $c) { ?>
	<div ><p>
      <img id="cart" src="<?php echo $c['image'] ?>" alt="Flower">
      <?php echo $c['description'] ?><br />
	  <?php echo $c['flower_price']  ?><br />
	  <?php echo $c['amount']  ?><br />  <?php echo $c['total']  ?><br />
	  <script>
	  total += <?php echo $c['total']  ?>;
	  </script>
	  </p> 
	  
    </div>
	<?php
}

 if(isset($_POST['submit'])) {
    deleteUserCart($_SESSION['id']);
	echo "Thanks for your purchase";
    
	// remove all session variables
    session_unset(); 

    // destroy the session 
    session_destroy();	
	echo "session variable" . $_SESSION['id'];
                
}
?>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
<p><input class="button" type="submit" name="submit" value="Confirm Transaction"></p>
</form>
</body>
</html>