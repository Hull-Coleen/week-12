<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $majorErr = "";
$name = $email = $major = $comment = $continent = $sCon = "" ;
$continents = array("NA" => "North Amercian", "SA" => "South America", "EU" => "Europe", "AS" =>  "Asia", "AU" => "Australia", "AF" => "Africa", "AN" => "Antarctica");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["major"])) {
    $majorErr = "Major is required";
  } else {
    $major = test_input($_POST["major"]);
  }
  if (!empty($_POST['continent'])) {
	 // foreach($_POST['continent'] as $selected){
		//  $sCon += $selected;
		  //echo $selected;
	  //}
	  $seenContinents = $_POST["continent"];
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Major:
  <input type="radio" name="major" <?php if (isset($major) && $major=="CS")
	  echo "checked";?> value="CS">Computer Science
  <input type="radio" name="major" <?php if (isset($major) && $major=="CE") 
	  echo "checked";?> value="CE">Computer Engineering
  <input type="radio" name="major" <?php if (isset($major) && $major=="WDD") 
	  echo "checked";?> value="WDD">Web Design and Development
  <input type="radio" name="major" <?php if (isset($major) && $major=="CIT") 
	  echo "checked";?> value="CIT"> Computer Information Technology 
  <span class="error">* <?php echo $majorErr;?></span>
  <br><br>
   Continents:<br>
  <?php
  foreach($continents as $key => $value) {
  echo "<input type='checkbox' name='continent[]' value=$key>$value<br>";
	  
  }
	  
  
  
  ?>


  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
echo $major;
echo "<br>";
foreach ($seenContinents as $c) {
	echo $continents[$c];
	echo " ";
}
?>

</body>
</html>



