<?php
session_start();
include_once('dbConnect.php');
$_SESSION["id"] = "test";
function getUserId($username, $password) {
	global $db;
    $query = "SELECT user_id FROM public.user WHERE (user_user_name = '{$username}')
          AND (user_password = '{$password}')";
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetch['user_id'];
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $e->getMessage();
        echo $e;
    }
}
$stmt = $db->prepare("SELECT user_id FROM public.user WHERE (user_user_name = '{$username}')
AND (user_password = '{$password}');");
$stmt->execute();
$id = $stmt->fetch()['user_id'];
echo "id " . $_SESSION["id"];
function setUser ($name, $username, $password, $address, $email) {
	global $db;
    try {
        $query = "INSERT INTO public.user (user_name, user_user_name, user_password, address, email)
            VALUES ('$name', '$username', '$password', '$email', '$address')";
        $db->exec($query);
		$newId = $db->lastInsertId('public.user)id_seq');
        return $newId;
    } catch (PDOException $e) {
        $e->getMessage();
        echo $e;
    }
}
if (isset($_POST)) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $email = $_POST['email'];
	$username1 = $_POST['username1'];
    $password1 = $_POST['password1'];
	

    if (!empty($username1) && !empty($password1)) {
	    $_SESSION["id"] = getUserId($username1, $password1);
		echo $_SESSION["id"];
		echo $username1 . $id;
	    echo $password1 . $name . $address . $email;
    }
	else if (empty($name) ) {
   
		// $_SESSION["id"] = setUser($name, $username, $password, $address, $email);
		echo $_SESSION["id"];
		echo "else";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Sign In Page</title>
<link rel="stylesheet" type="text/css" href="Week06style.css">
</head>
<body>
<a href="Week06.php">Homepage</a><br>
<?php
   echo $_SESSION["id"];
?>
<div id="row">
<h1>If you have an account,<br> Please sign in</h1>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
<p>
  
  <label for="username">User Name</label>
  <input type="text" placeholder="Name" id="username1" name="username1"><br><br>
  <label for="password">Password</label>
  <input type="text" placeholder="Password" id="password1" name="password1"><br><br>
  <br><br><br><br><input type="submit" value="Sign In">
  </p>
</form>
</div>
<div id="row2">
  <h1>To create an account, Please Enter your Fill in the Textboxes Below</h1>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
<p>
  <label for="name">Name</label>
  <input type="text" placeholder="Name" id="name" name="name">
  <br /><br />
  <label for="username">User Name</label>
  <input type="text" placeholder="user Name" id="username" name="username">
  <br /><br />
  <label for="password">Passwork</label>
  <input type="text" placeholder="Password" id="password" name="password">
			
  <br /><br />

  <label for="email">Email</label>
  <input type="text" placeholder="Email Address" id="email" name="email">
  <br /><br />
  
  <label for="email">Address</label>
  <input type="text" placeholder="Address" id="address" name="address">
  <br /><br />
  <input type="submit" value="Create Account">
 
</p>
</form>
</div>
 <?php
  $cart = getUserId($username, $password);
foreach($cart as $c) {
echo "cart " . $c['user_id'];
}
  ?>


</body>
</html>