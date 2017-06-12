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

        echo $username;
        echo $nickname;
        echo $zi;
        echo $luna;
        echo $an;
        echo $parola;
        echo $parolaconf;
        echo 'Today is ';
        $anCurent = date("Y");
        
        // $raspuns = $date("M")-$luna;
        echo $anCurent - $an;

        $INSERT_user= "INSERT INTO users (username, password, role, nickname) VALUES ('{$username}' ,'{$parola}','child', '{$nickname}')";
        $query_user_insert = mysqli_query($connection, $INSERT_user);

        if(mysqli_error($connection))
        {
                echo mysqli_error($connection);
        }

        $SELECTuserid = "select * from users where username= '{$username}'";
        
        $query_select_userid = mysqli_query($connection, $SELECTuserid);

        $rowUserid = mysqli_fetch_assoc($query_select_userid);
        $userid = intval($rowUserid['userid']);
 
        echo "user id este: ".$userid;

        $id_parinte =  3; // $_SESSION["id"];
        $INSERT_relation = "INSERT INTO relation (childid, parentid) VALUES ({$userid}, {$id_parinte})";
        $query_relation_insert = mysqli_query($connection, $INSERT_relation);

        if(mysqli_error($connection))
        {
            echo mysqli_error($connection);
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
                echo mysqli_error($connection);
        }

        $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'matematica', 'usor', 0); ";
        $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);

        $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'matematica', 'mediu', 0); ";
        $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);

        $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'matematica', 'greu', 0); ";
        $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);
        


        $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'mediu', 'usor', 0); ";
        $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);

        $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'mediu', 'mediu', 0); ";
        $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);

        $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'mediu', 'greu', 0); ";
        $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);


                          
        $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'muzica', 'usor', 0); ";
        $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);

        $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'muzica', 'mediu', 0); ";
        $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);
        
        $INSERT_solved = "INSERT INTO solved (childid, domain, diff, testid) values ({$userid}, 'muzica', 'greu', 0); ";
        $query_solved_INSERT = mysqli_query($connection, $INSERT_solved);
 
        
         
        if(mysqli_error($connection))
        {
                echo mysqli_error($connection);
        }

    }   


 ?>

