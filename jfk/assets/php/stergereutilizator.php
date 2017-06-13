<?php 
	require "mysqlConnection.php";
	$connection = mySqlConnection::getConnection();

	if(!empty($_POST))
	{
		$tid = $_POST['id']; 
		$sql = "SELECT * FROM users WHERE userid = '{$tid}' ";
		$result = mysqli_query($connection, $sql);
		
		if(!$result)
		{
			echo "Error: ".mysqli_error($connection);
			exit;
		}

		if(!$row = mysqli_fetch_assoc($result) )
		{
			$login_error = "Wrong username for password";
		}

		else
		{
			$deleteFromUsers = "DELETE FROM users WHERE userid = ". intval($tid); 

			$data = mysqli_query($connection, $deleteFromUsers);
			if(mysqli_error($connection))
			{
				header('Location: ../../eroareAdmin.php');
			}
			if(!$data)
			{
				header('Location: ../../eroareAdmin.php');
				exit;
			}

			if($row["role"] == 'parent')
			{
				$selectCopii = "SELECT * FROM relation WHERE parentid = '{$tid}' ";
				$resultSelectCopii = mysqli_query($connection, $selectCopii);
				if(mysqli_error($connection))
				{
					header('Location: ../../eroareAdmin.php');
				}
				if(!$resultSelectCopii)
				{
					header('Location: ../../eroareAdmin.php');
					exit;
				}
				else
				{
					while($rowSelectCopii = mysqli_fetch_assoc($resultSelectCopii))
					{
						$idCopilDeSters = $rowSelectCopii["childid"];
						$deleteFromChildinfo = "DELETE FROM childinfo WHERE childid = '{$idCopilDeSters}' "; 
						$dataDeleteFromChildinfo = mysqli_query($connection, $deleteFromChildinfo);
						if(!$dataDeleteFromChildinfo)
						{
							header('Location: ../../eroareAdmin.php');
							exit;
						}
					}
				}

				$deleteFromRelation = "DELETE FROM relation WHERE parentid = '{$tid}'"; 

				$dataDeleteFromRelation = mysqli_query($connection, $deleteFromRelation);
				if(mysqli_error($connection))
				{
					header('Location: ../../eroareAdmin.php');
				}
				if(!$dataDeleteFromRelation)
				{
					header('Location: ../../eroareAdmin.php');
					exit;
				}
			}
			
			if($row["role"] == 'child')
			{
				$deleteFromSolved = "DELETE FROM solved WHERE childid = '{$tid}'"; 

				$dataDeleteFromSolved = mysqli_query($connection, $deleteFromSolved);
				if(mysqli_error($connection))
				{
					header('Location: ../../eroareAdmin.php');
				}
				if(!$dataDeleteFromSolved)
				{
					header('Location: ../../eroareAdmin.php');
					exit;
				}

				$deleteFromRelation = "DELETE FROM relation WHERE childid = '{$tid}'"; 

				$dataDeleteFromRelation = mysqli_query($connection, $deleteFromRelation);
				if(mysqli_error($connection))
				{
					header('Location: ../../eroareAdmin.php');
				}
				if(!$dataDeleteFromRelation)
				{
					header('Location: ../../eroareAdmin.php');
					exit;
				}

				$deleteFromChildinfo = "DELETE FROM childinfo WHERE childid = '{$tid}'"; 

				$dataDeleteFromChildinfo = mysqli_query($connection, $deleteFromChildinfo);
				if(mysqli_error($connection))
				{
					header('Location: ../../eroareAdmin.php');
				}
				if(!$dataDeleteFromChildinfo)
				{
					header('Location: ../../eroareAdmin.php');
					exit;
				}
			}

		}	
	}	
 ?>
<script>
    window.location.href = '../../admin.php';
     alert("Utilizatorul a fost sters cu succes");
</script>