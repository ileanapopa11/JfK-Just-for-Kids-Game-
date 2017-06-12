<?php 
	session_start();
	require "mysqlConnection.php";
	$connection = mySqlConnection::getConnection();

	if(!empty($_POST))
	{
		$punctaj = $_POST['punctajul'];
		$idTest = $_POST['idTestUrm'];
		$dificultate = $_POST['dificultate'];
		$idUser = $_SESSION["id"];


		$sql = "SELECT * FROM testinfo WHERE testid = '{$idTest}'";
		$result = mysqli_query($connection, $sql);
	
		if(!$result)
		{
			header('Location:../../eroare.html');
			exit;
		}

		if(!$row = mysqli_fetch_assoc($result) )
		{
			$login_error = "Wrong username for password";
		}
			
		else 
		{
			$domeniul = $row["domain"];
			$sqlUpdatePunctaj = "UPDATE childinfo SET " . $domeniul . " = " . $domeniul. " + " . $punctaj;
			$resultUpdatePunctaj = mysqli_query($connection, $sqlUpdatePunctaj);
			if(mysqli_error($connection))
			{
				echo mysqli_error($connection);
			}
			if(!$resultUpdatePunctaj)
			{
				header('Location: ../../eroare.html');
				exit;
			}

			$sqlUpdateTest = "UPDATE solved SET testid = '{$idTest}' WHERE domain = '{$domeniul}' and diff = '{$dificultate}' and childid = '{$idUser}' ";
			$resultUpdateTest = mysqli_query($connection, $sqlUpdateTest);

			if(mysqli_error($connection))
			{
				echo mysqli_error($connection);
			}
			if(!$resultUpdateTest)
			{
				header('Location: ../../eroare.html');
				exit;
			}
		}

		// EMAIL PENTRU parse_ini_string(

		$selectParinte = "SELECT * FROM relation WHERE childid = '{$idUser}'";
			$resultSelectParinte = mysqli_query($connection, $selectParinte);
			if(mysqli_error($connection))
			{
				echo mysqli_error($connection);
			}
			if(!$resultSelectParinte)
			{
				header('Location: ../../eroare.html');
				exit;
			}
			if(!$rowSelectParinte = mysqli_fetch_assoc($resultSelectParinte))
			{
				echo mysqli_error($connection);
			}
			else
			{
				$idParinteEmail = $rowSelectParinte["parentid"];

				$selectParinteEmail = "SELECT * FROM users WHERE userid = '{$idParinteEmail}' ";
				$resultSelectParinteEmail = mysqli_query($connection, $selectParinteEmail);
				if(mysqli_error($connection))
				{
					echo mysqli_error($connection);
				}
				if(!$resultSelectParinteEmail)
				{
					header('Location: ../../eroare.html');
					exit;
				}
				if(!$rowSelectParinteEmail = mysqli_fetch_assoc($resultSelectParinteEmail))
				{
					echo mysqli_error($connection);
				}
				else
				{
					$emailParinte = $rowSelectParinteEmail["username"]; // EMAILUL PARINTELUI
				}
				
				$selectNumeCopil = "SELECT * FROM users WHERE userid = '{$idUser}' ";
				$resultSelectNumeCopil = mysqli_query($connection, $selectNumeCopil);
				if(mysqli_error($connection))
				{
					echo mysqli_error($connection);
				}
				if(!$resultSelectNumeCopil)
				{
					header('Location: ../../eroare.html');
					exit;
				}
				if(!$rowSelectNumeCopil = mysqli_fetch_assoc($resultSelectNumeCopil))
				{
					echo mysqli_error($connection);
				}
				else 
				{
					$numeCopil = $rowSelectNumeCopil["nickname"];  //NUMELE COPILULUI
				}
			}

			$subject = "Rezultat test Just For Kids";
			$comentariu = "Copilul dumneavoastra cu numele ".$numeCopil." a acumulat ".$punctaj." la un test ".$dificultate." din cadrul materiei ".$domeniul. " !".
			$email = "echipaJFK@kids.com";
			mail($emailParinte, "$subject", $comentariu, "From:" . $email);
	}
 ?>