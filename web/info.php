<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Info Page</title>
</head>
<body>
    
<script>
var myElement = document.getElementById("myVar").value;
</script>	
<?php
 echo $_SESSION["item"] = myElement;

?>

</body>
</html>