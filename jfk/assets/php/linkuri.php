<?php 
	require "mysqlConnection.php";
	$connection = mySqlConnection::getConnection();


		$selectlinkuri = "SELECT * FROM linkuri";
		$result = mysqli_query($connection, $selectlinkuri);
		if(!$result)
		{
			header('Location: ../../eroare.php');
			exit;
		}

		while($linkuri = mysqli_fetch_assoc($result))
		{
			echo "<a href=".$linkuri['link'].">".$linkuri['link']."</a>";
		}
?>

<style type="text/css">
	a {
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
</style>