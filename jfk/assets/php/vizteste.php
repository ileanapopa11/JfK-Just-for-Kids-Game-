<?php 
	session_start();
	if(!isset($_SESSION["id"]))
	{
		header('Location: index.html');
	}
	require "mysqlConnection.php";
	$connection = mySqlConnection::getConnection();


		$selectteste = "SELECT * FROM testinfo JOIN testcontent ON testinfo.testid=testcontent.testid";
		$result = mysqli_query($connection, $selectteste);
		if(!$result)
		{
			echo "Error: ".mysqli_error($connection);
			exit;
		}

		echo "<h1>Informatii despre teste:</h1>";
		echo "<h2>testid / materie / dificultate</h2>";
		while($teste = mysqli_fetch_assoc($result))
		{
			echo "<div>".$teste['testid']." / ".$teste['domain']." / ".$teste['diff']." / ".$teste['question']." / ".$teste['answer']."</div>";
		}
?>

<style type="text/css">
	h1 {
	float: left;
	font-family: 'Palaquin Dark', sans-serif;
	font-size: 20px;
	font-weight: bold;
	margin-bottom: 20px;
	margin-top: 20px;
	text-align: center;
	text-transform: uppercase;
	width: 100%;
	}
	h2 {
	float: left;
	font-family: 'Palaquin Dark', sans-serif;
	font-size: 15px;
	font-weight: bold;
	margin-bottom: 20px;
	margin-top: 10px;
	text-align: center;
	width: 100%;
	}
	div {
	float: left;
	font-family: 'Palaquin Dark', sans-serif;
	font-size: 15px;
	margin-bottom: 10px;
	margin-top: 10px;
	text-align: center;
	width: 100%;
	}
</style>