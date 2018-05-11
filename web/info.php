<?php
session_start();
$test;
$_SESSION["item"] = $_POST["item"];
$f = $_SESSION["item"];
$a = $_SESSION["cart"];
if($f == "Red Small") {
	$img = "Ashley.jpg";
	
}
else if ($f == "Blue Small") {
	$img = "Kristine.jpg";
}
else {
	$img = "world.jpg";
}
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Info Page</title>
</head>
<body>
<a href="/Prove03.php">Continue Shopping</a>
<a href="/cart.php">Cart</a>
	<img src="<?php echo $img; ?>" style="margin:0px auto;display:block" alt="World"> 
<?php

	
	$_SESSION["num"] = $_POST["num"];

 echo $_SESSION["item"];
 echo $_SESSION["num"];
 $t =$_SESSION["item"];
 $test = array($_SESSION["item"] => $_SESSION["num"]);
 $result = array_merge($test, $_SESSION["cart"]);
 foreach ($test as $key => $value) {
	 echo $key;
	 echo $value;
	 
 }
 
 
 //$a[$f] = $_SESSION['num'];
 //array_push($a, $f -> "1");
//$_SESSION["cart"][$t] = '1';
//$_SESSION["cart"] = $a;
array_push($_SESSION["cart"], $f -> $_SESSION["num"]);
echo count($_SESSION["cart"]);
	foreach ($_SESSION["cart"] as $fl => $value)
{
	echo htmlspecialchars($fl);
	echo "<br>";
    echo htmlspecialchars($value);
	
}echo count($result);
echo count($a);
 //$_SESSION["cart"] = array_push_assoc($_SESSION["cart"], $_SESSION["item"] , $_SESSION["num"]);
 //$_SESSION["cart"]_push($$_SESSION["item"], $_SESSION["num"]);
 //array_push($data,$question);

?>

</body>
</html>