<?php 
   session_start();
   if(!isset($_SESSION["id"]))
   {
      header('Location: index.html');
   }
   $_SESSION["dificultate"]=$_GET["dificultate"];
?>
<!DOCTYPE html>
<html>
<head>
   <title>Lupta cu Muschetarii</title>
   <link rel="stylesheet" type="text/css" href="assets/css/styleGame.css">
   <link rel="icon" type="image/x-icon"  href="assets/img/logo.png">
   <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=PT+Serif:400i" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- diacritice -->


</head>
   <body>
      <div class="sticky-header">
         <div class="center">
            <a href="copil.php" title="Cei trei Muschetari" class="logo">
               <div class="logo3m">
                  <img  src="assets/img/logo.png" alt="CEI TREI MUSCHETARI LOGO">
               </div>
            </a>
                  
            <nav>
               <ul>
                  <li><a href="copil.php"><span>Acasă</span></a></li>
                  <li><a href="poveste.php"><span>Poveste</span></a></li>
                  <li><a href="mateFriend.php"><span>Mate</span></a></li>
                  <li><a href="muzicaFriend.php"><span>Muzică</span></a></li>
                  <li><a href="mediuFriend.php"><span>Mediu</span></a></li>
                  <li><a id="deconectare" href="index.html"><span>Deconectare</span></a></li>
               </ul>
            </nav>
         </div>
      </div>
      
      <section id="muschetar">
         <?php 
            echo "<h3>Joc ".$_SESSION["dificultate"]."</h3>";

            if($_SESSION["domeniul"] == "matematica")
            {
               echo "<h4>Concentrare și curaj</h4>";
            }
            if($_SESSION["domeniul"] == "muzica")
            {
               echo "<h4>Energie și veselie</h4>";
            }
            if($_SESSION["domeniul"] == "mediu")
            {
               echo "<h4>Responsablitate și explorare</h4>";
            }
          ?>
      </section>


      <section id = "jocuri">
         <div class = "center">
            <ul class="jocuri-list">
               
                  <?php 
                     require "assets/php/mysqlConnection.php";
                     $connection = mySqlConnection::getConnection();

                     if((isset($_SESSION["domeniul"]) && isset($_SESSION["dificultate"])) == 1)  // Daca avem materia si dificultatea
                     {
                        $domeniul = $_SESSION["domeniul"];
                        $dificultatea = $_SESSION["dificultate"];
                        $iduser = $_SESSION["id"];

                        // Selectare ID Test deja rezolvat 

                        $sqlTestId = "SELECT * FROM solved WHERE childid = '{$iduser}' and domain = '{$domeniul}' and diff= '{$dificultatea}' ";
                        $resultTestId = mysqli_query($connection, $sqlTestId);
                        if(!$resultTestId)
                        {
                           header('Location: eroare.php');
                           exit;
                        }
                        if(!$testId = mysqli_fetch_assoc($resultTestId))
                        {
                           header('Location: eroare.php');
                           exit;
                        }
                        $testIdRezolvat = $testId['testid'];

                        // Selectare ID Test Urmator ce trebuie afisat

                        $sqlTestIdUrmator = "SELECT * FROM testinfo WHERE testid > '{$testIdRezolvat}' and domain= '{$domeniul}' and diff= '{$dificultatea}' order by testid LIMIT 1"; 
                        $resultTestIdUrmator = mysqli_query($connection, $sqlTestIdUrmator);
                        if(!$resultTestIdUrmator)
                        {
                           header('Location: eroare.php');
                           exit;
                        }
                         if(!$testId = mysqli_fetch_assoc($resultTestIdUrmator))
                        {
                           header('Location: eroare.php');
                           exit;
                        }
                        $testIdUrmator = $testId['testid'];
                     
                        // Selectare continut Test ce trebuie afisat

                        $sqlIntrebari = "SELECT * FROM testcontent WHERE testid= '{$testIdUrmator}'";
                        $resultIntrebari = mysqli_query($connection, $sqlIntrebari);
                        if(!$resultIntrebari)
                        {
                           header('Location: eroare.php');
                           exit;
                        }

                        $resultNrIntrebari = mysqli_query($connection, "SELECT count(*) FROM testcontent WHERE testid= '{$testIdUrmator}'");
                        if(!$resultNrIntrebari)
                        {
                           header('Location: eroare.php');
                           exit;
                        }
                        if(!$nrIntrebari = mysqli_fetch_assoc($resultNrIntrebari))
                        {
                           header('Location: eroare.php');
                           exit;
                        }

                        //Descrierea dificultatii
                        $sqlDescriere = "SELECT * FROM difficulty WHERE diff = '{$dificultatea}'";
                        $resultDescriere = mysqli_query($connection, $sqlDescriere);
                        

                        if(mysqli_error($connection))
                        {
                           header('Location: eroare.php');
                           exit;
                        }
                        if(!$resultIntrebari)
                        {
                           header('Location: eroare.php');
                           exit;
                        }
                        if(!$resultDescriere)
                        {
                           header('Location: eroare.php');
                           exit;
                        }

                        
                        if(!$rowDescriere = mysqli_fetch_assoc($resultDescriere))
                        {
                           header('Location: eroare.php');
                           exit;
                        }
                        $count=1;

                        //Afisarea Intrebarilor Testului
                        while($rowIntrebari = mysqli_fetch_assoc($resultIntrebari))
                        {   
                          
                           if($count==1) //Prima Intrebare
                           {
                              echo "<li id=l".$count." class =\"jocuri-item\">
                                 <figure class=\"jocuri-image\">
                                    <img src=\"assets/img/mate3.png\" alt=\"Pattern\">
                                    <div class=\"jocuri-image-text\">
                                       <h6>
                                          <i>".$rowDescriere['description']."</i>
                                       </h6>
                                    </div> 
                                 </figure>";
                           }
                           else
                           {
                              echo "<li id=l".$count." class =\"jocuri-item-none\">
                                 <figure class=\"jocuri-image\">
                                    <img src=\"assets/img/mate3.png\" alt=\"Pattern\">
                                    <div class=\"jocuri-image-text\">
                                       <h6>
                                          <i>".$rowDescriere['description']."</i>
                                       </h6>
                                    </div> 
                                 </figure>";
                           }

                           //Afisare urmatoarele intrebari
                           if($dificultatea == "greu")
                           {
                              echo "<form class=\"jocuri-description\">";
                                 echo "<h6>";
                                    print_r($rowIntrebari['question']);
                                    echo "</br>";
                                    echo "<input id=t".$count." type=\"text\"/>";
                                    echo "</br>";
                                    echo "<input  type=\"button\" value=\"Urmatoarea Intrebare\" placeholder=\"".$rowIntrebari['answer']."\" id=".$count." onClick=\"apasareGreu(this.id,this.placeholder,".$nrIntrebari['count(*)'].",".$rowDescriere['points'].",".$testIdUrmator.")\" />";
                                 echo "</h6>";
                              echo "</form>";
                              $count=$count+1;
                           }
                           else if($dificultatea == "usor")
                           {
                              echo "<form class=\"jocuri-description\">";
                                 echo "<h6>";
                                    print_r($rowIntrebari['question']);
                                    echo "</br>";
                                    echo "<label>a</label>";
                                    echo "<input id=t_a".$count." type=\"radio\" value=\"a\"/>";
                                    echo "<label>b</label>";
                                    echo "<input id=t_b".$count." type=\"radio\" value=\"b\"/>";
                                    echo "<label>c</label>";
                                    echo "<input id=t_c".$count." type=\"radio\" value=\"c\"/>";
                                    echo "</br>";
                                    echo "<input  type=\"button\" value=\"Urmatoarea Intrebare\" placeholder=\"".$rowIntrebari['answer']."\" id=".$count." onClick=\"apasareUsor(this.id,this.placeholder,".$nrIntrebari['count(*)'].",".$rowDescriere['points'].",".$testIdUrmator.")\" />";
                                 echo "</h6>";
                              echo "</form>";
                              $count=$count+1;
                           }
                           else if($dificultatea == "mediu")
                           {
                              echo "<form class=\"jocuri-description\">";
                                 echo "<h6>";
                                    print_r($rowIntrebari['question']);
                                    echo "</br>";
                                    echo "<label>Adevarat</label>";
                                    echo "<input id=t_A".$count." type=\"radio\" value=\"A\"/>";
                                    echo "<label>Fals</label>";
                                    echo "<input id=t_F".$count." type=\"radio\" value=\"F\"/>";
                                    echo "</br>";
                                    echo "<input  type=\"button\" value=\"Urmatoarea Intrebare\" placeholder=\"".$rowIntrebari['answer']."\" id=".$count." onClick=\"apasareMediu(this.id,this.placeholder,".$nrIntrebari['count(*)'].",".$rowDescriere['points'].",".$testIdUrmator.")\" />";
                                 echo "</h6>";
                              echo "</form>";
                              $count=$count+1;
                           }
                           
                        }
                     }
                     else echo"Nu esti logat";

                     //Lipsa teste pentru utilizator
                     if($testIdUrmator == null)
                     {
                        echo "<li id=\"felicitari\" class =\"jocuri-item\">
                                 <figure class=\"jocuri-image\">
                                    <img src=\"assets/img/mate3.png\" alt=\"Pattern\">
                                    <div class=\"jocuri-image-text\">
                                       <h6>
                                          <i>Ne pare rau!</i>
                                       </h6>
                                    </div> 
                                 </figure>";
                                 echo "<div class=\"jocuri-description\">";
                                 echo "<h6>";
                                    echo "<i>Nu mai exista teste. Incearca de la celelalte dificultati </i>";
                                 echo "</h6>";
                              echo "</div>";
                     }

                     //Rezultat test
                     echo "<li id=\"felicitari\" class =\"jocuri-item-none\">
                                 <figure class=\"jocuri-image\">
                                    <img src=\"assets/img/mate3.png\" alt=\"Pattern\">
                                    <div class=\"jocuri-image-text\">
                                       <h6>
                                          <i>Rezultatul tau</i>
                                       </h6>
                                    </div> 
                                 </figure>";
                                 echo "<div class=\"jocuri-description\">";
                                 echo "<h6>";
                                    echo "<i>Ai acumulat </i>";
                                    echo "<div id=\"punctaj\"></div>";
                                 echo "</h6>";
                              echo "</div>";
               ?>

               </li>
            </ul>
         </div>
      </section>
   </body>
</html>

     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
      <script>
         var nrRaspunsuri=0;

         //Verificare raspunsuri test usor
         var apasareUsor = function(clicked_id, raspunsCorect, nr, puncte, idTestUrm)
         {  
            if(Number(clicked_id) < Number(nr))
            {
               if(document.getElementById("t_a".concat(clicked_id)).checked)
               {
                  var raspunsPrimit = "a";
               }
               else if(document.getElementById("t_b".concat(clicked_id)).checked)
               {
                  var raspunsPrimit = "b";
               }
               else if(document.getElementById("t_c".concat(clicked_id)).checked)
               {
                  var raspunsPrimit = "c";
               }
               if(raspunsPrimit == raspunsCorect)
               {
                  nrRaspunsuri=nrRaspunsuri+1;
               }

               document.getElementById("l".concat(clicked_id)).classList.remove('jocuri-item');
               document.getElementById("l".concat(clicked_id)).classList.add('jocuri-item-none');

               document.getElementById("l".concat(Number(clicked_id)+1)).classList.remove('jocuri-item-none');
               document.getElementById("l".concat(Number(clicked_id)+1)).classList.add('jocuri-item');
            }
            else
            {
               if(document.getElementById("t_a".concat(clicked_id)).checked)
               {
                  var raspunsPrimit = "a";
               }
               else if(document.getElementById("t_b".concat(clicked_id)).checked)
               {
                  var raspunsPrimit = "b";
               }
               else if(document.getElementById("t_c".concat(clicked_id)).checked)
               {
                  var raspunsPrimit = "c";
               }
               if(raspunsPrimit == raspunsCorect)
               {
                  nrRaspunsuri=nrRaspunsuri+1;
               }

               document.getElementById("l".concat(clicked_id)).classList.remove('jocuri-item');
               document.getElementById("l".concat(clicked_id)).classList.add('jocuri-item-none');

               document.getElementById("felicitari").classList.remove('jocuri-item-none');
               document.getElementById("felicitari").classList.add('jocuri-item');

               document.getElementById("punctaj").innerHTML=Number(puncte)*nrRaspunsuri;
               var punctajul=Number(puncte)*nrRaspunsuri;
               $.ajax({
                  type: 'POST',
                  url: "assets/php/teste.php",
                  dataType: "text",
                  data: {punctajul:punctajul, idTestUrm:idTestUrm, dificultate:"usor"},
                  success:function(data)
                  {
                     alert("Emailul cu punctajul tau a fost trimis");
                     window.location.href = "copil.php";
                  }
               });
            }
         }

         //Verificare raspunsuri test mediu
         var apasareMediu = function(clicked_id, raspunsCorect, nr, puncte, idTestUrm)
         {  
            if(Number(clicked_id) < Number(nr))
            {
               if(document.getElementById("t_A".concat(clicked_id)).checked)
               {
                  var raspunsPrimit = "A";
               }
               else if(document.getElementById("t_F".concat(clicked_id)).checked)
               {
                  var raspunsPrimit = "F";
               }
               if(raspunsPrimit == raspunsCorect)
               {
                  nrRaspunsuri=nrRaspunsuri+1;
               }
               document.getElementById("l".concat(clicked_id)).classList.remove('jocuri-item');
               document.getElementById("l".concat(clicked_id)).classList.add('jocuri-item-none');
               document.getElementById("l".concat(Number(clicked_id)+1)).classList.remove('jocuri-item-none');
               document.getElementById("l".concat(Number(clicked_id)+1)).classList.add('jocuri-item');
            }
            else
            {
               if(document.getElementById("t_A".concat(clicked_id)).checked)
               {
                  var raspunsPrimit = "A";
               }
               else if(document.getElementById("t_F".concat(clicked_id)).checked)
               {
                  var raspunsPrimit = "F";
               }
               if(raspunsPrimit == raspunsCorect)
               {
                  nrRaspunsuri=nrRaspunsuri+1;
               }
               document.getElementById("l".concat(clicked_id)).classList.remove('jocuri-item');
               document.getElementById("l".concat(clicked_id)).classList.add('jocuri-item-none');

               document.getElementById("felicitari").classList.remove('jocuri-item-none');
               document.getElementById("felicitari").classList.add('jocuri-item');

               document.getElementById("punctaj").innerHTML=Number(puncte)*nrRaspunsuri;
               var punctajul=Number(puncte)*nrRaspunsuri;
               $.ajax({
                  type: 'POST',
                  url: "assets/php/teste.php",  
                  dataType: "text",
                  data: {punctajul:punctajul , idTestUrm:idTestUrm, dificultate:"mediu" },
                  success:function(data)
                  {
                     alert("Emailul cu punctajul tau a fost trimis");
                     window.location.href = "copil.php";
                  }
               });
            }
         }

          //Verificare raspunsuri test greu
         var apasareGreu = function(clicked_id, raspunsCorect, nr, puncte, idTestUrm)
         {  
            if(Number(clicked_id) < Number(nr))
            {
               var raspunsPrimit = document.getElementById("t".concat(clicked_id));
               if(raspunsPrimit.value == raspunsCorect)
               {
                  nrRaspunsuri=nrRaspunsuri+1;
               }
               document.getElementById("l".concat(clicked_id)).classList.remove('jocuri-item');
               document.getElementById("l".concat(clicked_id)).classList.add('jocuri-item-none');
               document.getElementById("l".concat(Number(clicked_id)+1)).classList.remove('jocuri-item-none');
               document.getElementById("l".concat(Number(clicked_id)+1)).classList.add('jocuri-item');
            }
            else
            {
               var raspunsPrimit = document.getElementById("t".concat(clicked_id));
               if(raspunsPrimit.value == raspunsCorect)
               {
                  nrRaspunsuri=nrRaspunsuri+1;
               }
               document.getElementById("l".concat(clicked_id)).classList.remove('jocuri-item');
               document.getElementById("l".concat(clicked_id)).classList.add('jocuri-item-none');

               document.getElementById("felicitari").classList.remove('jocuri-item-none');
               document.getElementById("felicitari").classList.add('jocuri-item');

               document.getElementById("punctaj").innerHTML=Number(puncte)*nrRaspunsuri;
               var punctajul=Number(puncte)*nrRaspunsuri;
               $.ajax({
                  type: 'POST',
                  url: "assets/php/teste.php",
                  
                  dataType: "text",
                  data: {punctajul:punctajul, idTestUrm:idTestUrm, dificultate:"greu"},
                  success:function(data)
                  {
                     alert("Emailul cu punctajul tau a fost trimis");
                     window.location.href = "copil.php";
                  }
               });
            }
         }
      </script>

<script type="text/javascript">
//Deconectare
  document.getElementById("deconectare").onclick=function()
  {
    document.location = "assets/php/logout.php";
  }
</script>