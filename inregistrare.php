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

			$data = mysqli_query($connection, $sql);
			if(mysqli_error($connection))
			{
				echo mysqli_error($connection);
			}

			$select = "select * from users";

			$result = mysqli_query($connection, $select);
			if(!$result)
			{
				echo "Error: ".mysqli_error(connection);
				exit;
			}

			echo '<pre>';
			while($row = mysqli_fetch_assoc($result))
			{
				print_r($row);

			}		
		}
	}	


 ?>