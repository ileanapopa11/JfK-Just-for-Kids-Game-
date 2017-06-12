<?php 
	require "mysqlConnection.php";
	$connection = mySqlConnection::getConnection();

	if(!empty($_POST))
	{
		$dom = $_POST['domeniu'];
		$dif = $_POST['dificultate']; 

		$array = array($_POST['intrebare1'], $_POST['raspuns1'],
						$_POST['intrebare2'], $_POST['raspuns2'],
						$_POST['intrebare3'], $_POST['raspuns3'],
						$_POST['intrebare4'], $_POST['raspuns4'],
						$_POST['intrebare5'], $_POST['raspuns5'],
						$_POST['intrebare6'], $_POST['raspuns6'],
						$_POST['intrebare7'], $_POST['raspuns7'],
						 );

		$link = $_POST['link'];

			$insertintotestinfo = "INSERT INTO testinfo (domain, diff, link) VALUES ('{$dom}' ,'{$dif}','{$link}')"; 

			$data = mysqli_query($connection, $insertintotestinfo);
			if(mysqli_error($connection))
			{
				echo mysqli_error($connection);
			}

			
			$selecttid = "SELECT * FROM testinfo where domain='{$dom}' and diff='{$dif}' and link='{$link}' ORDER BY testid DESC LIMIT 1";
			$result = mysqli_query($connection, $selecttid);
			if(!$result)
			{
				echo "Error: ".mysqli_error($connection);
				exit;
			}

			$tid = mysqli_fetch_assoc($result);
			
			
			$count=0;


			$testid=intval($tid['testid']);	
			echo $testid;
			
			while($array[$count] != null)
			{
				$intreb=$array[$count];
				$rasp=$array[$count+1];
				$insertintotestcontent = "INSERT INTO testcontent (testid, questionid, question, answer) VALUES 
				('{$testid}' ,'{$count}','{$intreb}','{$rasp}')";

				$result = mysqli_query($connection, $insertintotestcontent);
				if(!$result)
				{
					echo "Error: ".mysqli_error($connection);
					exit;
				}
				$count=$count+2;
			}
					
	}	


 ?>

 			<script>
     			 window.location.href = '../../admin.php';
     			 alert("Testul a fost introdus cu succes");
    		</script>