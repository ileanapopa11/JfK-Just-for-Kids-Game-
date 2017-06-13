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
		$dom = $_POST['domeniu'];
		$tid = $_POST['id']; 


			$deletefromtestinfo = "DELETE FROM testinfo WHERE domain='{$dom}' AND testid=" . intval($tid); 

			$data = mysqli_query($connection, $deletefromtestinfo);
			if(mysqli_error($connection))
			{
				header('Location: ../../eroareAdmin.php');
			}
			if(!$data)
			{
				header('Location: ../../eroareAdmin.php');
				exit;
			}

			else{			
				$deletefromtestcontent = "DELETE FROM testcontent WHERE testid=" . intval($tid);
				$result = mysqli_query($connection, $deletefromtestcontent);
				if(mysqli_error($connection))
				{
					header('Location: ../../eroareAdmin.php');
				}
				if(!$result)
				{
					header('Location: ../../eroareAdmin.php');
					exit;
				}
			}
				
	}	
 ?>

<script>
    window.location.href = '../../admin.php';
    alert("Testul a fost sters cu succes");
</script>