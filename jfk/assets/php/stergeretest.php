<?php 
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
				echo mysqli_error($connection);
			}
			if(!$data)
			{
				echo "Error: ".mysqli_error($connection);
				header();
				exit;
			}

			else{			
				$deletefromtestcontent = "DELETE FROM testcontent WHERE testid=" . intval($tid);
				$result = mysqli_query($connection, $deletefromtestcontent);
				if(mysqli_error($connection))
				{
					echo mysqli_error($connection);
				}
				if(!$result)
				{
					header('Location: ../../eroare.html');
					exit;
				}
			}
				
	}	
 ?>

 			<script>
     			 window.location.href = '../../admin.php';
     			 alert("Testul a fost sters cu succes");
    		</script>