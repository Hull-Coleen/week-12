<?php
session_start();
$test;
$_SESSION["item"] = $_POST["item"];
$f = $_SESSION["item"];

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

	
	//$_SESSION["num"] = $_POST["num"];

 echo $_SESSION["item"];
 //echo "t" . $t . "f" . $f . "<br>"; 
 //echo $_SESSION["num"];
 $t = $_SESSION["item"];
 //$test = array($_SESSION["item"] => $_SESSION["num"]);
 //$result = array_merge($test, $_SESSION["cart"]);
 //foreach ($test as $key => $value) {
	// echo $key;
	 //echo $value;
	 
 //}
 //$a = array($f);
 //array_push($_SESSION["cart"], $a);
 //array_push($_SESSION["cart"], $f);
 //array_push($_SESSION["cart"], $_SESSION["item"]);
 foreach ($_SESSION["cart"] as $fl) {
	 echo "session " . htmlspecialchars($fl);
 }
 
 
 
  //$_SESSION["cart"][$f] = "1";
  //echo "<br><br>" . count($_SESSION["cart"]);
 //array_push($a, $f -> "1");
 //$_SESSION["cart"][$t] = '1';
  $_SESSION["cart"] = $a;
//array_push($_SESSION["cart"], $f -> $_SESSION["num"]);
////array_push($_SESSION["cart"], $test);
//echo "session" . count($_SESSION["cart"]);
//foreach ($_SESSION["cart"] as $fl => $value)
//{
	//echo htmlspecialchars($fl);
	//echo "<br>";
    //echo htmlspecialchars($value);
	
//}
echo "<br><br>" . count($_SESSION["cart"]);
//echo count($result);
//echo count($a);
 

?>

</body>
</html>