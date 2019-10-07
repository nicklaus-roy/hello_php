<?php
	try{
		$pdo_config = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
		$pdo = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', 'root', $pdo_config);
	}catch(PDOException $e) {
		echo $e->getMessage();
		die();
	}

	$statement = $pdo->prepare('SELECT * FROM students WHERE id = :id');
	$statement->execute([
		'id' => $_GET['id']
	]);
	$student = $statement->fetch(PDO::FETCH_OBJ);

	require('edit-student.view.php');
?>