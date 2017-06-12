<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Just For Kids</title>
   <meta name="viewpoint" content="width=device-width, initial-scale=1, user-scalable=no" >
   <link rel="stylesheet" type="text/css" href="assets/css/style_copil.css">
   <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

   <link rel="icon" type="image/x-icon"  href="assets/img/logo.png">
   
   <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=PT+Serif:400i" rel="stylesheet">

   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- diacritice -->

</head>
<body>
      <div class="sticky-header">
         <div class="center">
               <a href="index.html" title="Cei trei Muschetari" class="logo">
                      <div class="logo3m">
                      <img  src="assets/img/logo.png" alt="CEI TREI MUSCHETARI LOGO">
                      </div>
               </a>
               
               <nav>
                  <ul>
                     <li><a href="poveste.php"><span>Poveste</span></a></li>
                     <li><a href="mateFriend.php"><span>Mate</span></a></li>
                     <li><a href="muzicaFriend.php"><span>Muzică</span></a></li>
                     <li><a href="mediuFriend.php"><span>Mediu</span></a></li>
                     <li id="p"><a><span>Punctaj</span></a></li>
                     <li id="deconectare"><a href="index.html"><span>Deconectare</span></a></li>
                  </ul>
               </nav>
         </div>
      </div>
   
      <header>
         <div class="center">

         <div class="middle">
            <h2>Bine ai venit!</h2>
            <h1>Cei 3 muschetari <br />...de pe WWW</h1>
            <a href="poveste.php"><button>POVESTE</button></a> 
         </div>
         </div>
      </header>

      <section id="gamePicker">
         <div class="center">
            <h3>Să ne jucăm, muschetar!</h3>
            <h4>Cu ce muschetar vrei să te lupți astăzi?</h4>
            <ul class="gamePicker-list">
               <li class="gamePicker-item">
                  <a href="mateFriend.php">
                     <figure class="gamePicker-image">
                        <img src="assets/img/numaratoare.jpg" alt="Numaratoare">
                        <div class="gamePicker-image-text">
                           <h6>
                              Matematică
                           </h6>
                        </div>
                     </figure>
                     <div class="gamePicker-description">
                        <h6>
                           Concentrare și curaj!
                        </h6>
                        <p>
                           Matematică
                        </p>
                     </div>
                  </a>
               </li>
               

               <li class="gamePicker-item">
                  <a href="muzicaFriend.php">
                     <figure class="gamePicker-image">
                        <img src="assets/img/pian2.jpg" alt="Pian">
                        <div class="gamePicker-image-text">
                           <h6>
                              Muzică
                           </h6>
                        </div>
                     </figure>
                     <div class="gamePicker-description">
                        <h6>
                           Energie și veselie!
                        </h6>
                        <p>
                           Muzică
                        </p>
                     </div>
                  </a>
               </li>


               <li class="gamePicker-item">
                  <a href="mateFriend.php">
                     <figure class="gamePicker-image">
                        <img src="assets/img/palme.jpg" alt="Planeta Pamant">
                        <div class="gamePicker-image-text">
                           <h6>
                              Mediu inconjurător
                           </h6>
                        </div>
                     </figure>
                     <div class="gamePicker-description">
                        <h6>
                           Responsabilitate și explorare!
                        </h6>
                        <p>
                           Mediu inconjurător
                        </p>
                     </div>
                  </a>
               </li>
            </ul>

         </div>
      </section>

<section id="punctaj">
      <h3>Punctaje obținute</h3>
      
      <table class="evol-table">
      <?php
       
          require "assets/php/mysqlConnection.php";
          
          $connection = mySqlConnection::getConnection();
         
          $id_copil = $_SESSION["id"]; //de data asta suntem conectati cu contul unui copil deci vom avea id-ul copilului in _S
          $sqlINFO = "SELECT * FROM childinfo WHERE childid=" . $id_copil; 
          $query_INFO = mysqli_query($connection, $sqlINFO);

           if(!$query_INFO)
          {
                echo "Error: ".mysqli_error($connection);
                exit;
          }
          
          $row = mysqli_fetch_assoc($query_INFO);
          

          // echo "<h4> Progresează!</h4>";

          if($row['matematica'] > $row['muzica'] && $row['matematica'] > $row['mediu'])
          {
                $best = "matematică";
          }

          if($row['muzica'] > $row['matematica'] && $row['muzica'] > $row['mediu'])
          {
                $best = "muzică";
          }

          if($row['mediu'] > $row['matematica'] && $row['mediu'] > $row['muzica'])
          {
                $best = "mediu";
          }

          echo "<h4> Te-ai descurcat cel mai bine la ". $best.". Progresează! </h4>";

          echo "<table>";
                
                echo "<tr>";
                       echo "<th class=\"childColumn\">";
                            echo "<div>Matematică</div>";
                       echo "</th>";

                       echo "<th class=\"childColumn\">";
                            echo "<div>Mediu înconjurator</div>";
                       echo "</th>";
                       
                       echo "<th class=\"childColumn\">";
                            echo "<div>Muzică</div>";
                       echo "</th>";

                echo "</tr>";

                echo "<tr>";
                       echo "<td class=\"childColumn\">";
                            echo "<div>".$row['matematica']."</div>";
                       echo "</td>";

                       echo "<td class=\"childColumn\">";
                            echo "<div>".$row['muzica']."</div>";
                       echo "</td>";
                       
                       echo "<td class=\"childColumn\">";
                            echo "<div>".$row['mediu']."</div>";
                       echo "</td>";

                echo "</tr>";
          echo "</table>";

              
      ?>
      </table>
</section>

<section id="aux">
   <div class="slider">

       <figure>
                           <div class="slide">
                              <img src="assets/img/reclame/reclama.jpg" alt="Reclama">
                           </div>

                           <div class="slide">
                              <img src="assets/img/reclame/reclama2.jpg" alt="Reclama">
                           </div>

                           <div class="slide">
                              <img src="assets/img/reclame/reclama3.jpg" alt="Reclama">
                           </div>

                           <div class="slide">
                              <img src="assets/img/reclame/reclama4.jpg" alt="Reclama">
                           </div>

                           <div class="slide">
                              <img src="assets/img/reclame/reclama5.jpg" alt="Reclama">
                           </div>
       </figure>
   </div>
</section>

</body>
</html>

<script type="text/javascript">
  document.getElementById("p").onclick=function()
  {
    window.location="#punctaj";
  };
</script>

<script type="text/javascript">
  document.getElementById("deconectare").onclick=function()
  {
    document.location = "assets/php/logout.php";
  }
</script>