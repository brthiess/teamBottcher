<?php include 'connect.php';
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$stmt = $db->prepare("SELECT password FROM users WHERE username = :name");
		$stmt->bindParam(":name", $username);
		$stmt->execute();
		
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		//No Users Found
		if(count($result) < 1) {
			header("Location: login.php");
		}
		
		$hash = hash('sha256', $password);
		//Wrong Password
		if ($hash != $result[0]['password']) {
			header("Location: login.php");
		}

		
?>