<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Confirmation Page</title>
</head>
<body>


<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>
</body>
</html>