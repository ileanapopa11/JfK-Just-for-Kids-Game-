<?php 
   session_start();
   $_SESSION["domeniul"]="muzica";
?>
<!DOCTYPE html>
<html>
<head>
   <title>Muschetar Muzică</title>
   <link rel="stylesheet" type="text/css" href="assets/css/styleM.css">
   <link rel="stylesheet" type="text/css" href="assets/css/responsiveM.css">
   <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Asar|Droid+Serif" rel="stylesheet">

   <link rel="icon" type="image/x-icon"  href="assets/img/logo.png">
   
   <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=PT+Serif:400i" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Aladin" rel="stylesheet">

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
                     <li><a href="index.html"><span>Acasă</span></a></li>
                     <li><a href="poveste.php"><span>Poveste</span></a></li>
                     <li><a href="mateFriend.php"><span>Mate</span></a></li>
                     <li><a href="muzicaFriend.php"><span>Muzică</span></a></li>
                     <li><a href="mediuFriend.php"><span>Mediu</span></a></li>
                  </ul>
               </nav>
         </div>
      </div>
   
   <div id="under"></div>

   
   <section id="muschetar">
         <h3>Muschetarul Muzicii!</h3>
         <h4>Energie și veselie!</h4>
         <div class="center">
         <p> <i class="firstLetter">A </i> fost odată ca niciodată un muschetar elegant care trăia într-un castel de cristal. În fiecare cameră avea câte o colecție de instrumente. Știa să mânuiască cu pricepere orice vioară, harpă sau contrabas. Puterile lui cele mai mari erau blândețea și răbdarea. Vrei să te învețe câteva trucuri? </p>
      
   </section>



   <section id="jocuri">
         <div class="center">
            <h4>Descoperă unul dintre jocurile următoare!</h4>
            <ul class="jocuri-list">
               <li class="jocuri-item">
                  <a href="Game.php?dificultate=usor">
                     <figure class="jocuri-image">
                        <img src="assets/img/muzica1.png" alt="Muzica">
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
                        <img src="assets/img/muzica2.png" alt="Pattern">
                       
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
                        <img src="assets/img/muzica3.png" alt="Pattern">
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
                     <strong>Matematică <br /> Concentrare și curaj</strong>
                     <p>   "Numerele și calculele pot părea grele și plictisitoare, dar gândirea este cel
                     mai mare atuu al nostru. Prin exercitiu ne putem face mintea ascuțită ca o sabie de 
                     muschetar. Haide cu mine să ne punem mintea la lucru!" <br /> <b>- Muschetarul Matematicii</b>
                     </p>
                  </div>
                  <figure>
                     <a href="mateFriend.php"><img src="assets/img/numaratoare.jpg" height=166px alt="Muzica"></a>
                  </figure>
               </li>
               <li class="timeline-item">
                  <div class="description">
                     <strong>Mediu inconjurător <br /> Responsablitate și explorare</strong>
                     <p>   "Natura este uluitoare! În jurul nostru traiesc sute de specii de
                     animale și plante pe care trebuie să le protejăm. Haide să vedem ce
                     secrete nebanuite se ascund aproape de noi!" <br /> <b>- Muschetarul Mediului înconjurător</b>
                     </p>
                  </div>
                  <figure>
                     <a href="mediuFriend.php"><img src="assets/img/palme.jpg" height=166px alt="Muzica"></a>
                  </figure>
               </li>
            </ul>
         </div>
      </section>


</body>
</html>