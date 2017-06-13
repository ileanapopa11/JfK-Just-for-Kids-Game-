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
		$userid = $_POST['id'];
		$message = $_POST['comentarii']; 


		$selectusername = "SELECT * FROM users WHERE userid='{$userid}'";
		$result = mysqli_query($connection, $selectusername);
		if(!$result)
		{
			header('Location: ../../eroare.php');
			exit;
		}

		if(!$username = mysqli_fetch_assoc($result))
        {
            header('Location: ../../eroare.php');
            exit;
        }
        
		$subject = "JFK: Message from admin";
		$from= "jfk_3m_email@gmail.com";

		mail($username['username'],$subject,$message,$from);
	}

?>