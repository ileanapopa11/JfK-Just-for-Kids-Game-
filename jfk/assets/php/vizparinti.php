<?php 
	session_start();
	if(!isset($_SESSION["id"]))
	{
		header('Location: index.html');
	}
	require "mysqlConnection.php";
	$connection = mySqlConnection::getConnection();


		$selectparinti = "SELECT * FROM users JOIN relation ON userid=parentid ORDER BY userid";
		$result = mysqli_query($connection, $selectparinti);
		if(!$result)
		{
			echo "Error: ".mysqli_error($connection);
			exit;
		}

		echo "<h1>Informatii despre utilizatorii parinti: </h1>";
		echo "<h2>userid/username : id copil</h2>";
		while($parinti = mysqli_fetch_assoc($result))
		{
			echo "<div>".$parinti['userid']." / ".$parinti['username']." : ".$parinti['childid']."</div>";
		}
?>

<style type="text/css">
	h1 {
	float: left;
	font-family: 'Palaquin Dark', sans-serif;
	font-size: 20px;
	font-weight: bold;
	margin-bottom: 10px;
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