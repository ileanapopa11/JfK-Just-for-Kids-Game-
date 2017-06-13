<?php 
	session_start();
	if(!isset($_SESSION["id"]))
	{
		header('Location: index.html');
	}
	require "mysqlConnection.php";
	$connection = mySqlConnection::getConnection();

	if(!empty($_POST))
	{
		$fraza = $_POST['select'];
		
		echo '<pre>';
		$result = mysqli_query($connection, $fraza);

		if(mysqli_error($connection))
		{
			echo mysqli_error($connection);
		}

		while($row = mysqli_fetch_assoc($result))
		{
			print_r($row);
		}
	
	}	

 ?>