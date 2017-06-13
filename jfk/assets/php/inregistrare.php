<?php 
	
	require "mysqlConnection.php";
	$connection = mySqlConnection::getConnection();

	if(!empty($_POST))
	{
		$email = $_POST['email'];
		$zi = $_POST['zi']; 
		$luna = $_POST['luna'];
		$an = $_POST['an'];
		$parola = $_POST['parola'];
		$parolaconf = $_POST['parolaconf'];

		$verificare = mysqli_query($connection, "SELECT count(*) FROM users WHERE username = '{$email}' ");
		$row = mysqli_fetch_assoc($verificare) ;
		if($row['count(*)'] != 0)
		{	
			?>

		<script>
			window.location.href = '../../index.html';
    		alert("Exista deja numele de utilizator");
		</script>

			<?php
		}
		else
		{

			$sql= "INSERT INTO users (username, password, role) VALUES ('{$email}' ,'{$parola}','parent')"; 

			$result = mysqli_query($connection, $sql);
			
			if(!$result)
			{
				header('Location: ../../eroare.php');
				exit;
			}

			if(!$row = mysqli_fetch_assoc($result) )
			{
				header('Location: ../../eroare.php');
				exit;
			}

			header('Location: ../../index.html');
		}
	
	}


 ?>