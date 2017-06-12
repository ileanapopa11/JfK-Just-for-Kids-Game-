<?php 
	session_start();
	require "mysqlConnection.php";
	$connection = mySqlConnection::getConnection();


	if(!empty($_POST))
	{
		$email = $_POST['email'];
		$password = $_POST['parola'];
		$sql = "SELECT * FROM users WHERE username = '{$email}' AND password = '{$password}'";
		$result = mysqli_query($connection, $sql);
		
		if(!$result)
		{
			echo "Error: ".mysqli_error($connection);
			exit;
		}

		if(!$row = mysqli_fetch_assoc($result) )
		{
			$login_error = "Wrong username for password";
		}
		else
		{		
			$_SESSION["id"] = $row["userid"];

			if($row["role"] == 'admin')
			{
				header('Location: http://localhost/jfk/admin.php');
			}

			if($row["role"] == 'child')
			{
				header('Location: http://localhost/jfk/copil.php');
			}

			if($row["role"] == 'parent')
			{
				header('Location: http://localhost/jfk/parinte.php');
			}
		}
	}

 ?> 