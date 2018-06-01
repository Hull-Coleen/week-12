<?php
$dbUrl = getenv('DATABASE_URL');
$dbopts = parse_url($dbUrl);
$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');
try
{
  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
function getId($flower_id) {
    global $db;
	$stmt2 = $db->prepare("SELECT flower_id FROM flower WHERE (description = :description);");
	$stmt2->bindValue(':description', $flower_id);
    $stmt2->execute();
    $id = $stmt2->fetch()['flower_id'];
	return $id;
	
}
function addCart($user_id, $flower_id) {
	global $db;
    try {
        $query = "INSERT INTO cart (user_id, flower_id)
            VALUES ($user_id, $flower_id)";
        $db->exec($query);
    } catch (PDOException $e) {
        $e->getMessage();
        echo $e;
    }
}
function setUser ($name, $username, $password, $address, $email) {
	global $db;
    try {
        $query = "INSERT INTO public.user (user_name, user_user_name, user_password, address, email)
            VALUES ('$name', '$username', '$password', '$email', '$address')";
        $db->exec($query);
		$newId = $db->lastInsertId('user_user_id_seq');
        return $newId;
    } catch (PDOException $e) {
        $e->getMessage();
        echo $e;
    }
}
?>