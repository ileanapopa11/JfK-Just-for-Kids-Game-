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
		$link = $_POST['link'];

		$sql = "INSERT INTO linkuri (link) VALUES ('{$link}')"; 
		$result = mysqli_query($connection, $sql);

		if(!$result)
		{
			header('Location: ../../eroare.php');
			exit;
		}
	}
?>

<script>
    window.location.href = '../../parinte.php';
    alert("Multumim pentru sugestie!");
</script>