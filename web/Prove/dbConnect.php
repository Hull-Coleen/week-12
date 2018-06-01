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
function deleteFromCart ($id, $flower_id) {
	global $db;
    $query = 'DELETE FROM cart WHERE user_id =:user_id AND flower_id =:flower_id';
	try {
	    $statement = $db->prepare($query);
		$statement->bindValue(':user_id', $id);
	    $statement->bindValue(':flower_id', $flower_id);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
		
    } catch (PDOException $e) {
        $e->getMessage();
        echo $e;
    }
}
function searchFlowers($occ) {
	global $db;
    $query = 'SELECT f.flower_price, f.description, f.image FROM flower f
              INNER JOIN occasion o
			  WHERE o.occasion_type = :occasion
              AND f.flower_type = o.occasion_id;';
	try {
        
	    $statement = $db->prepare($query);
		$statement->bindValue(':occasion', $occ);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
		
    } catch (PDOException $e) {
        $e->getMessage();
        echo $e;
    }
}
function getFlowers() {
	global $db;
	$query = 'SELECT flower_type, flower_price, description, image FROM flower';
	try {
	    $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
		
    } catch (PDOException $e) {
        $e->getMessage();
        echo $e;
    }
}
function getPrice($desc) {
	global $db;
	$query = 'SELECT flower_price FROM flower WHERE description = :description';
	try {
	    $statement = $db->prepare($query);
		$statement->bindValue(':description', $desc);
        $statement->execute();
        $result = $statement->fetch()['flower_price'];
        return $result;
		
    } catch (PDOException $e) {
        $e->getMessage();
        echo $e;
    }
}
function getImage($desc) {
	global $db;
	$query = 'SELECT image FROM flower WHERE description = :description';
	try {
	    $statement = $db->prepare($query);
		$statement->bindValue(':description', $desc);
        $statement->execute();
        $result = $statement->fetch()['image'];
        return $result;
		
    } catch (PDOException $e) {
        $e->getMessage();
        echo $e;
    }
}
function getUserInfo($id) {
	global $db;
    try {
        $query = 'SELECT user_name, user_user_name, address, email 
                     FROM public.user
					 WHERE user_id = :user_id';
	    $statement = $db->prepare($query);
		$statement->bindValue(':user_id', $id);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
		
    } catch (PDOException $e) {
        $e->getMessage();
        echo $e;
    }
}
function getCart ($id) {
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
}
function getFlowerId($flower_id) {
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
function getUserId($username, $password) {
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
}
?>