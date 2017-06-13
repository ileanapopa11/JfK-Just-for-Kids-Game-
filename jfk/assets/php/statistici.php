<?php 
	session_start();
	require "mysqlConnection.php";
	$connection = mySqlConnection::getConnection();


		echo "<h1>Statistici</h1>";
		echo "<h2>Nr de utilizatori din baza de date: </h2>";
		$copii = mysqli_query($connection,  "SELECT count(*) FROM users where role='child'");
		if(!$copii)
		{
			header('Location: ../../eroare.php');
			exit;
		}
		$nrcopii = mysqli_fetch_assoc($copii);
		$nrcopii = $nrcopii['count(*)'];

		$parinti = mysqli_query($connection,  "SELECT count(*) FROM users where role='parent'");
		if(!$parinti)
		{
			header('Location: ../../eroare.php');
			exit;
		}
		$nrparinti = mysqli_fetch_assoc($parinti);
		$nrparinti = $nrparinti['count(*)'];

		$nrTotal = intval($nrcopii)+intval($nrparinti);
		echo "<p>".$nrTotal." dintre care parinti: ".$nrparinti." , copii: ".$nrcopii."</p>";


		$result = mysqli_query($connection,  "SELECT count(*) FROM testcontent");
		if(!$result)
		{
			header('Location: ../../eroare.php');
			exit;
		}
		$nrteste = mysqli_fetch_assoc($result);
		$nrteste = $nrteste['count(*)'];

		echo "<h2>Nr de teste: </h2>";
		
		echo "<p>".$nrteste."</p>";
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
	margin-bottom: 10px;
	margin-top: 10px;
	text-align: center;
	width: 100%;
	}
	p {
	float: left;
	font-family: 'Palaquin Dark', sans-serif;
	font-size: 15px;
	margin-bottom: 20px;
	margin-top: 10px;
	text-align: center;
	width: 100%;
	}
</style>