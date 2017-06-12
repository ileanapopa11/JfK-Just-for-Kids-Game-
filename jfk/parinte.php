<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Parinte</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style_parinte.css">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400i" rel="stylesheet">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- diacritice -->
  <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
</head>

<body>

  <div id="jfk">
    <header>
      <div class="center">
        <a href="/" title="Parent's Page for JFK" class="logo"><img src="assets/img/logo.png" alt="logo"></a>
      
      <nav>
        <ul>
          <li id="h"><a href="#" class=""><span><i class="fa fa-home" aria-hidden="true"></i>Acasă</span></a></li>
          <li id="a"><a class=""><span><i class="fa fa-graduation-cap" aria-hidden="true"></i>Avantaje</span></a></li>
          <li id="c"><a><span><i class="fa fa-user-plus" aria-hidden="true"></i>Creare cont copil</span></a></li>
          <li id="e"><a ><span><i class="fa fa-child" aria-hidden="true"></i>Evoluţie</span></a></li>
          <li id="s"><a><span><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Sugestii</span></a></li>
          <li id="click"><a href="#"><span><i class="fa fa-sign-out" aria-hidden="true"></i>Deconectare</span></a></li>
        </ul>
      </nav>
      <!-- <div id="deconectare">-->
      <div class="middle">
        <h2>Bine ai venit!</h2>
        <h1>Cei 3 Muschetari<br/>...de pe WWW</h1>
        <button>CE MAI E NOU?</button>  
      </div> 
      </div>
    </header>

    
    <!-- AVANTAJE -->
    <section id="avantaje">
      <div class="center">
        <h3>Avantajele tale</h3>
        <h4>Hai să ne implicăm impreună în dezvoltarea copilului tău!</h4>
        <div class="av-list">
          <div class="av-item">
            <div class="av-icon">
              <span><i class="fa fa-eye" aria-hidden="true"></i></span>
            </div>
            <strong>Accesibilitate</strong>
            <p>
              Obții foarte usor informații actualizate privind evoluția copilului tău.
            </p>
          </div>
          <div class="av-item">
            <div class="av-icon">
              <span><i class="fa fa-puzzle-piece" aria-hidden="true"></i></span>
            </div>
            <strong>Dezvoltare</strong>
            <p>
              Copilul tău va fi stimulat să găsească soluții folosind internetul în mod constructiv.
            </p>
          </div>
          <div class="av-item">
            <div class="av-icon">
              <span><i class="fa fa-check-square" aria-hidden="true"></i></span>
            </div>
            <strong>Protecţie</strong>
            <p>
              Mediul prietenos și captivant este o alternativă sigură pentru petrecerea timpului liber.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- CREARE CONT -->
    <section id="cont">
      <h3>Creează cont</h3>
      <h4>Spune-ne câteva lucruri despre muschetarul tău!</h4>
      <form id="cont_copil" method="post" action="http://localhost/jfk/assets/php/inregistrareCopil.php">
        <div id="prenume-signup">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" name="nickname" placeholder="Porecla de muschetar" required="required">
        </div>
        <div id="username-signup">
          <i class="fa fa-sign-in" aria-hidden="true"></i>
          <input type="text" name="username" placeholder="Nume de utilizator" required="required">
        </div>
        <div id="data_nastere-signup">
          <i class="fa fa-birthday-cake" aria-hidden="true"></i>
          <input type="text" name="zi" placeholder="Ziua">
          <input type="text" name="luna" placeholder="Luna">
          <input type="text" name="an" placeholder="Anul">
        </div>
        <div id="parola-signup">
          <i class="fa fa-key" aria-hidden="true"></i>
          <input type="password" name="parola" placeholder="Parola">
        </div>
        <div id="parola_conf-signup">
          <i class="fa fa-shield" aria-hidden="true"></i>
          <input type="password" name="parolaconf" placeholder="Confirmare Parola">
        </div>
        <button>Creează</button>
      </form>
      <h4>Acordă-le şi altor copii şansă de a deveni muschetari puternici!<br>
        Răspândeşte vestea şi ajută-ne să facem 
        o armata mare de micuţi dornici să înveţe şi să se distreze.</h4>
      <div id="retele">
        <span><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
        <span><a href="https://www.instagram.com/?hl=ro"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
        <span><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
        <span><a href="https://www.whatsapp.com/?l=ro"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></span>
      </div>

    </section>


    <!-- EVOLUTIE -->
    <section id="evol">
      <h3>Evoluţia muschetarilor</h3>
      <h4>Ştiai cât de puternici pot deveni micuţii muschetari? Priveşte!</h4>
      <table class="evol-list">
      
      <?php 
          $id_parinte = 3; //$_SESSION["id"];
          require "assets/php/mysqlConnection.php";
          
          $connection = mySqlConnection::getConnection();
          $sqlCopii= "SELECT * FROM relation WHERE parentid=" . $id_parinte; 

          $listaCopiiID = mysqli_query($connection, $sqlCopii);
            
          if(mysqli_error($connection))
          {
                echo mysqli_error($connection);
          }
            
          if(!$listaCopiiID)
          {
                echo "Error: ".mysqli_error($connection);
                exit;
          }

          echo "<tr>";

          echo "<td class=\"childColumn\">";
          echo "<h6>Nume Copil</h6>";
          echo "</td>";

          echo "<td class=\"childColumn\">";
          echo "<h6>Matematică</h6>";
          echo "</td>";

          echo "<td class=\"childColumn\">";
          echo "<h6>Muzică</h6>";
          echo "</td>";

          echo "<td class=\"childColumn\">";
          echo "<h6>Mediu înconjurător</h6>"; //înconjurător
          echo "</td>";
          echo "</tr>";

          while($row = mysqli_fetch_assoc($listaCopiiID))
          {
                $sqlNumeCopil = "SELECT * from users where role='child' and userid=" . $row['childid'] . ";";
                $listaNumeCopil = mysqli_query($connection, $sqlNumeCopil);

                while($row2 = mysqli_fetch_assoc($listaNumeCopil))
                {
                    echo "<tr class=\"evol-item\">";
                        echo "<td class=\"evol-description\">";
                                echo "<h5>".$row2['nickname']."</h5>";
                        echo "</td>";
                    // echo "</tr>";
                }
                
                $sqlDateCopil = "SELECT * FROM childinfo where childid=" . $row['childid'];
                $listaCopilINFO = mysqli_query($connection, $sqlDateCopil);

                while($row3 = mysqli_fetch_assoc($listaCopilINFO))
                {      
                      echo "<td class=\"evol-item\">";                           
                            echo "<b class=\"evol-points\">";
                                  echo $row3['matematica'];
                            echo "</b>";
                      echo "</td>";


                      echo "<td class=\"evol-item\">";                           
                            echo "<b class=\"evol-points\">";
                                  echo $row3['muzica'];
                            echo "</b>";                                                   
                      echo "</td>";


                      echo "<td class=\"evol-item\">";
                            
                            echo "<b class=\"evol-points\">";
                                  echo $row3['mediu'];
                            echo "</b>";
                      echo "</td>";
                }
                echo "</tr>";
          }
    ?>
    </table>
    
    </section>

    <!-- SUGESTII -->
    <section id="sugestii">
      <h3>Sugestii</h3>
      <h4>Implicaţi-vă activ, sugerând site-uri sau articole pentru realizarea testelor</h4>
      <form>
        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
          <input type="text" name="link" placeholder="Link-ul complet"> <br>
        <button>Trimite</button>
      </form>
      <h4>Mulţumim!</h4>
    </section>
  </div>
</body>
</html>

<script type="text/javascript">
  document.getElementById("a").onclick=function(){
    window.location="#avantaje";
  };
  document.getElementById("c").onclick=function(){
    window.location="#cont";
  };
  document.getElementById("e").onclick=function(){
    window.location="#evol";
  };
  document.getElementById("s").onclick=function(){
    window.location="#sugestii";
  };
</script>