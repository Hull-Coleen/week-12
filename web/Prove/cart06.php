<?php
session_start();
include_once('dbConnect.php');

$id = $_SESSION["id"];
$t = $_GET['_delete'];

if (!empty($t)) {
	unset($_SESSION["cart"][$t]);
    $query = "DELETE FROM cart WHERE user_id =:user_id AND flower_id =:flower_id";
	$statement = $db->prepare($query);
	$statement->bindValue(':user_id', $id);
	$statement->bindValue(':flower_id', $t);
    $statement->execute();
}

//$stmt = $db->prepare('SELECT f.flower_id, f.description, f.flower_price, f.image 
  //                   FROM flower f
	//				 INNER JOIN cart c ON f.flower_id = c.flower_id
		//			 WHERE c.user_id = :user_id');
//$stmt->bindValue(':user_id', $id);
//$stmt->execute();				 

/*function getCart ($id) {
	global $db;
    try {
        $query = 'SELECT f.flower_id, f.description, f.flower_price, f.image 
                     FROM flower f
					 INNER JOIN cart c ON f.flower_id = c.flower_id
					 WHERE c.user_id = :user_id';
        $statement = $db->prepare($query);
		$statement->bindValue(':user_id', $id);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
		
    } catch (PDOException $e) {
        $e->getMessage();
        echo $e;
    }
}*/
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
while($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
  ?>
	<div ><p>
      <img id="cart" src="<?php echo $rows['image'] ?>" alt="Flower">
      <?php echo $rows['description'] ?><br />
	  <?php echo $rows['flower_price']  ?><br />
	  <?php echo "<a href='{$_SERVER["PHP_SELF"]}?_delete={$rows['flower_id']}'>Delete</a>"; ?>
	  </p> 
    </div>
  <?php
  }
 
  ?>
<a href="Week06confirm.php">Complete Transaction</a><br>

</body>
</html>