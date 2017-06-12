<?php 
   session_start();
   $_SESSION["domeniul"]="mediu";
?>
<!DOCTYPE html>
<html>
<head>
   <title>Muschetar Mediu</title>
   <link rel="stylesheet" type="text/css" href="assets/css/styleM.css">
   <link rel="stylesheet" type="text/css" href="assets/css/responsiveM.css">
   <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Asar|Droid+Serif" rel="stylesheet">

   <link rel="icon" type="image/x-icon"  href="assets/img/logo.png">
   
   <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=PT+Serif:400i" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
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
   
   <div id="under"></div>

   
   <section id="muschetar">
         <h3>Muschetarul Mediului Înconjurător!</h3>
         <h4>Responsabilitate și explorare!</h4>
         <div class="center">
         <p> <i class="firstLetter">A </i> fost odată ca niciodată un muschetar mic de statură care umbla mereu prafuit și avea haine rupte, fapt pentru care nu era iubit de nimeni. Însă ce lumea de rând nu știa despre el era că-i atat de puternic încât poate muta munții din loc. El este muschetarul matematicii. Ești gata să rezolvi exercițiile împreună cu el?</p>
      
   </section>



   <section id="jocuri">
         <div class="center">
            <h4>Descoperă unul dintre jocurile următoare!</h4>
            <ul class="jocuri-list">
               <li class="jocuri-item">
                  <a href="Game.php?dificultate=usor">
                     <figure class="jocuri-image">
                        <img src="assets/img/natura1.png">
                        <div class="jocuri-image-text">
                           <h6>
                              Ușor
                           </h6>
                        </div> 
                     </figure>

                     <div class="jocuri-description">
                        <h6>
                           Completează cu a, b sau c.
                        </h6>
                     </div>
                  </a>
               </li>
               

               <li class="jocuri-item">
                  <a href="Game.php?dificultate=mediu">
                     <figure class="jocuri-image">
                        <img src="assets/img/natura2.png">
                       
                        <div class="jocuri-image-text">
                           <h6>
                              Mediu
                           </h6>
                        </div>
                     </figure>

                     <div class="jocuri-description">
                        <h6>
                           Adevărat sau fals?
                        </h6>
                     </div>

                  </a>
               </li>


               <li class="jocuri-item">
                  <a href="Game.php?dificultate=greu">
                     <figure class="jocuri-image">
                        <img src="assets/img/natura3.png">
                        <div class="jocuri-image-text">
                           <h6>
                              Dificil
                           </h6>
                        </div>
                     </figure>

                     <div class="jocuri-description">
                        <h6>
                           Completează câmpurile folosind cuvintele potrivite 
                        </h6>
                     </div>

                  </a>
               </li>
            </ul>

         </div>
      </section>


   <section id="colegi">
         <h3>Colegi muschetari</h3>
         <h4>Alege altă arie în care să-ti încerci cunoștințele!</h4>
         <div class="center">
             <div class="line">
               </div>
            <ul class="timeline">
               <li class="timeline-item">
                  <div class="description">
                     <strong>Muzică <br /> Energie și veselie</strong>
                     <p>   "Melodiile ne pot face fericiți dacă suntem supărați,
                     ele ne înveselesc în orice situație! Haide cu mine să descoperim 
                     bazele teoriei muzicale!" <br /> <b>- Muschetarul Muzicii</b>
                     </p>
                  </div>
                  <figure>
                     <a href="muzicaFriend.php"><img src="assets/img/pian2.jpg" height=166px></a>
                  </figure>
               </li>
               <li class="timeline-item">
                  <div class="description">
                     <strong>Matematică <br /> Concentrare și curaj</strong>
                     <p>   "Numerele și calculele pot părea grele și plictisitoare, dar gândirea este cel
                     mai mare atuu al nostru. Prin exercitiu ne putem face mintea ascuțită ca o sabie de 
                     muschetar. Haide cu mine să ne punem mintea la lucru!" <br /> <b>- Muschetarul Matematicii</b>
                     </p>
                  </div>
                  <figure>
                     <a href="mateFriend.php"><img src="assets/img/numaratoare.jpg" height=166px></a>
                  </figure>
               </li>
            </ul>
         </div>
      </section>


</body>
</html>

<script type="text/javascript">
  document.getElementById("deconectare").onclick=function()
  {
    document.location = "assets/php/logout.php";
  }
</script>