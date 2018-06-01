<?php
session_start();
include_once('dbConnect.php');
$_SESSION["id"];
$id;
/*function getUserId($username, $password) {
	global $db;
    $query = 'SELECT user_id FROM public.user WHERE (user_user_name = :user_user_name)
          AND user_password = :password';
    try {
        $statement = $db->prepare($query);
		$statement->bindValue(':user_user_name', $username);
		$statement->bindValue(':password', $password);
        $statement->execute();
        $result = $statement->fetch()[user_id];
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $e->getMessage();
        echo $e;
    }
}*/

/*function setUser ($name, $username, $password, $address, $email) {
	global $db;
    try {
        $query = "INSERT INTO public.user (user_name, user_user_name, user_password, address, email)
            VALUES ('$name', '$username', '$password', '$email', '$address')";
        $db->exec($query);
		$newId = $db->lastInsertId('user_user_id_seq');
		//echo "function" . $newId;
        return $newId;
    } catch (PDOException $e) {
        $e->getMessage();
        echo $e;
    }
}*/
if (isset($_POST)) {
    $name = htmlspecialchars($_POST['name']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $address = htmlspecialchars($_POST['address']);
    $email = htmlspecialchars($_POST['email']);
	$username1 = htmlspecialchars($_POST['username1']);
    $password1 = htmlspecialchars($_POST['password1']);
	

    if (!empty($username1) && !empty($password1)) {
		$id = getUserId($username1, $password1);
		if (!empty($id)) {
        header('Location: Week06.php');
        }
    }
    if (empty($username1 ) && !empty($name)) {
		if (empty($name) || empty($username) || empty($password) || empty($email) || empty($address)) {
			echo "must enter all the fields";
		}
		else {
			$id = setUser($name, $username, $password, $address, $email);
			if(isset($_POST['submit'])) {
				if (!empty($id)) {
                header('Location: Week06.php');
                }
			}
		}
		
	}
	$_SESSION["id"] = $id;
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
   echo $_SESSION["id"] . "<br>";
   //echo "id" . $id;
?>
<div id="row">
<h1>If you have an account,<br> Please sign in</h1>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
<p>
  
  <label for="username">User Name</label>
  <input type="text" placeholder="Name" id="username1" name="username1"><br><br>
  <label for="password">Password</label>
  <input type="text" placeholder="Password" id="password1" name="password1"><br><br>
  <br><br><br><br><input type="submit" name="submit" value="Sign In">
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
  <input type="submit" name="submit" value="Create Account">
  
 
</p>
</form>
</div>


</body>
</html>