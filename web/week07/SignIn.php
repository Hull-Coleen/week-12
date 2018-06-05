<?php
session_start();
include_once('dbConnect.php');
$_SESSION["id"];
$id;


if (isset($_POST)) {
    $name = htmlspecialchars($_POST['name']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $address = htmlspecialchars($_POST['address']);
    $email = htmlspecialchars($_POST['email']);
	$username1 = htmlspecialchars($_POST['username1']);
    $password1 = htmlspecialchars($_POST['password1']);
	$password2 = htmlspecialchars($_POST['password2']);
	
	 if (!empty($username1) && !empty($password1)) {
		if ($password1 == $password2) {
		
		   $pass = getUserPassword($username1);
		
		   if (password_verify($password1, $pass)) {
		
		      $id = getUserId($username1, $pass);
		      if (!empty($id)) {
                 header('Location: Week06.php');
              }
		   } else {
			   echo "wrong password";
		   }
        }
		else {
			$error = "* Passwords don't match";
		}
	}
    if (empty($username1 ) && !empty($name)) {
		if (empty($name) || empty($username) || empty($password) || empty($email) || empty($address)) {
			$error = "you must fill in all the text fields";
			echo "<script type='text/javascript'>alert(\"$error\");</script>";
		}
		else {
			$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
			$id = setUser($name, $username, $hashedPassword, $address, $email);
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

<div id="row">
<h1 id="form" >If you have an account, Please sign in</h1>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
<?php
if(isset($error) && !empty($error)){
    ?>
    <span class="error"><?= $error; ?></span>
    <?php
}
?>
<p id="form">
  
  <label for="username">User Name</label>
  <input type="text" placeholder="Name" id="username1" name="username1"><br><br>
  <label for="password">Password</label>
  <input type="password" placeholder="Password" id="password1" name="password1" value="<?php echo $pass ?>"><span class="error"> <?php echo "*"?></span>
  <label for="password">Password</label>
  <input type="password" placeholder="Password" id="password2" name="password2" value="<?php echo $pass2 ?>"><span class="error"> <?php echo "*"?></span>
  <br><br><br><br><br><br><br><br></p><p><input type="submit" name="submit" value="Sign In">
  </p>
</form>
</div>
<div id="row2">
  <h1>To create an account, Please Enter your Fill in the Textboxes Below</h1>
<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">
<p id="form">
  <label for="name">Name</label>
  <input type="text" placeholder="Name" id="name" name="name">
  <br /><br />
  <label for="username">User Name</label>
  <input type="text" placeholder="user Name" id="username" name="username">
  <br /><br />
  <label for="password">Passwork</label>
  <input type="password" placeholder="Password" id="password" name="password">
			
  <br /><br />

  <label for="email">Email</label>
  <input type="text" placeholder="Email Address" id="email" name="email">
  <br /><br />
  
  <label for="email">Address</label>
  <input type="text" placeholder="Address" id="address" name="address">
  <br /><br />
  </p><p><input type="submit" name="submit" value="Create Account">
  
 
</p>
</form>
</div>


</body>
</html>