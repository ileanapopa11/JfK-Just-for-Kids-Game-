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

		if($an > 1995)
		{
			echo "Nu aveti varsta";
		}
		else
		{
			$sql= "INSERT INTO users (username, password, role) VALUES ('{$email}' ,'{$parola}','parent')"; 

			$result = mysqli_query($connection, $sql);
		
			if(!$result)
			{
				header('Location: ../../eroare.html');
				exit;
			}

			if(!$row = mysqli_fetch_assoc($result) )
			{
				header('Location: ../../eroare.html');
				exit;
			}

			header('Location: index.html');
		}
	}	


 ?>