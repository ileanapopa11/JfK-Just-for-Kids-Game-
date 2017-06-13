<?php 
   session_start();
   if(!isset($_SESSION["id"]))
   {
      header('Location: index.html');
   }
?>
<!DOCTYPE html>
<html>
<head>
   <title>Oups</title>
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
      
      <section>
            <h3>A aparut o eroare</h3>;
            <h4>Te rugam sa te intorci la o alta pagina</h4>;
      </section>
   </body>
</html>

