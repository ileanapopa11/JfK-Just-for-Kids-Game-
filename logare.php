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
			echo "Error: ".mysqli_error(connection);
			exit;
		}

		if(!$row = mysqli_fetch_assoc($result) )
		{
			$login_error = "Wrong username for password";
		}
		else
		{		
			$_SESSION['user'] = $row;

			if($row["role"] == 'admin')
			{
				header('Location: http://localhost:8181/jfk/admin.html');
			}

			if($row["role"] == 'child')
			{
				header('Location: http://localhost:8181/jfk/MateGame3.html');
			}

			if($row["role"] == 'parent')
			{
				header('Location: http://localhost:8181/jfk/MuzicaGame3.html');
			}
		}
	}

	session_destroy();

 ?> 