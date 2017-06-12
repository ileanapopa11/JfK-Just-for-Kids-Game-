<?php 
	require "mysqlConnection.php";
	$connection = mySqlConnection::getConnection();

	if(!empty($_POST))
	{
		$userid = $_POST['id'];
		$message = $_POST['comentarii']; 


		$selectusername = "SELECT * FROM users WHERE userid='{$userid}'";
		$result = mysqli_query($connection, $selectusername);
		if(!$result)
		{
			echo "Error: ".mysqli_error($connection);
			exit;
		}

		$username = mysqli_fetch_assoc($result);
		$subject = "JFK: Message from admin";
		$from= "jfk_3m_email@gmail.com";

		mail($username['username'],$subject,$message,$from);
	}

?>