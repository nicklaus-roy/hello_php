<?php
	try{
		$pdo_config = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
		$pdo = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', 'root', $pdo_config);
	}catch(PDOException $e) {
		echo $e->getMessage();
		die();
	}

	$statement = $pdo->prepare("INSERT INTO students (first_name, last_name, age, gender)  VALUES (:first_name, :last_name, :age, :gender)");
	
	$statement->execute([
		'first_name' => $_POST['first_name'],
		'last_name' => $_POST['last_name'],
		'age' => $_POST['age'],
		'gender' => $_POST['gender']
	]);

	header("Location: index.php"); 
?>