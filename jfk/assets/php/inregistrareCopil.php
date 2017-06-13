<?php 
    session_start();
    require "mysqlConnection.php";
    $connection = mySqlConnection::getConnection();

    if(!empty($_POST))
    {
        $nickname = $_POST['nickname'];
        $username = $_POST['username'];
        $zi = $_POST['zi']; 
        $luna = $_POST['luna'];
        $an = $_POST['an'];
        $parola = $_POST['parola'];
        $parolaconf = $_POST['parolaconf'];

        $verificare = mysqli_query($connection, "SELECT count(*) FROM users WHERE username = '{$username}' ");
        $row = mysqli_fetch_assoc($verificare) ;
        if($row['count(*)'] != 0)
        {   
            ?>

        <script>
            window.location.href = '../../parinte.php';
            alert("Exista deja numele de utilizator");
        </script>

            <?php
        }
        else
        {
            $INSERT_user= "INSERT INTO users (username, password, role, nickname) VALUES ('{$username}' ,'{$parola}','child', '{$nickname}')";
            $query_user_insert = mysqli_query($connection, $INSERT_user);

            if(!$query_user_insert)
            {
                header('Location: ../../eroare.php');
                exit;
            }

            if(mysqli_error($connection))
            {
                header('Location: ../../eroare.php');
            }

            $SELECTuserid = "select * from users where username= '{$username}'";
            
            $query_select_userid = mysqli_query($connection, $SELECTuserid);
            if(!$query_select_userid)
            {
                header('Location: ../../eroare.php');
                exit;
            }
            
            if(!$rowUserid = mysqli_fetch_assoc($query_select_userid))
            {
                header('Location: ../../eroare.php');
                exit;
            }

            $userid = intval($rowUserid['userid']);
     
            echo "user id este: ".$userid;

            $id_parinte = $_SESSION["id"];
            $INSERT_relation = "INSERT INTO relation (childid, parentid) VALUES ({$userid}, {$id_parinte})";
            $query_relation_insert = mysqli_query($connection, $INSERT_relation);

            if(! $query_relation_insert)
            {
                header('Location: ../../eroare.php');
                exit;
            }

            if(mysqli_error($connection))
            {
               header('Location: ../../eroare.php');
            }

            
            if($anCurent - $an <= 6)
            {
                $age = "prescolar";
            }
            else {
                $age = "elev";
            }

            $INSERT_childinfo = "INSERT INTO childinfo (childid, age, matematica, muzica, mediu) values ({$userid}, '{$age}', 0, 0, 0)";
            $query_childinfo_INSERT = mysqli_query($connection, $INSERT_childinfo);

            if(mysqli_error($connection))
            {
                header('Location: ../../eroare.php');
            }

            $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'matematica', 'usor', 0); ";
            $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);

            if(!$query_solved_INSERT)
            {
                header('Location: ../../eroare.php');
                exit;
            }

            $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'matematica', 'mediu', 0); ";
            $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);

            if(!$query_solved_INSERT)
            {
                header('Location: ../../eroare.php');
                exit;
            }

            $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'matematica', 'greu', 0); ";
            $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);
            
            if(!$query_solved_INSERT)
            {
                header('Location: ../../eroare.php');
                exit;
            }

            $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'mediu', 'usor', 0); ";
            $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);

            if(!$query_solved_INSERT)
            {
                header('Location: ../../eroare.php');
                exit;
            }

            $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'mediu', 'mediu', 0); ";
            $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);

            if(!$query_solved_INSERT)
            {
                header('Location: ../../eroare.php');
                exit;
            }

            $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'mediu', 'greu', 0); ";
            $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);

            if(!$query_solved_INSERT)
            {
                header('Location: ../../eroare.php');
                exit;
            }
                              
            $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'muzica', 'usor', 0); ";
            $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);

            if(!$query_solved_INSERT)
            {
                header('Location: ../../eroare.php');
                exit;
            }

            $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'muzica', 'mediu', 0); ";
            $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);

            if(!$query_solved_INSERT)
            {
                header('Location: ../../eroare.php');
                exit;
            }
            
            $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'muzica', 'greu', 0); ";
            $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);

            if(!$query_solved_INSERT)
            {
                header('Location: ../../eroare.php');
                exit;
            }
     
            if(mysqli_error($connection))
            {
                header('Location: ../../eroare.php');
            }

            header('Location: ../../parinte.php');
        }
    }   

 ?>

