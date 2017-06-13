<?php 
	require "mysqlConnection.php";
	$connection = mySqlConnection::getConnection();

	if(!empty($_POST))
	{
		$email = $_POST['email'];
		$zi = $_POST['zi']; 
		$luna = $_POST['luna'];
		$an = $_POST['an'];
		$parola = $_POST['parola'];
		$parolaconf = $_POST['parolaconf'];

		$sql= "INSERT INTO users (username, password, role) VALUES ('{$email}' ,'{$parola}','parent')"; 

		$result = mysqli_query($connection, $sql);
		
		if(!$result)
		{
			header('Location: ../../eroare.php');
			exit;
		}

		if(!$row = mysqli_fetch_assoc($result) )
		{
			header('Location: ../../eroare.php');
			exit;
		}

		header('Location: index.html');
	}	


 ?>