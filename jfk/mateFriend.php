<?php 
   session_start();
   $_SESSION["domeniul"]="matematica";
?>
<!DOCTYPE html>
<html>
<head>
   <title>Muschetar Mate</title>
   <link rel="stylesheet" type="text/css" href="assets/css/styleM.css">
   <link rel="stylesheet" type="text/css" href="assets/css/responsiveM.css">

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
                      <img src="assets/img/logo.png" alt="CEI TREI MUSCHETARI LOGO">
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
   
   <section id="muschetar">
         <h3>Muschetarul Matematicii!</h3>
         <h4>Concentrare și curaj!</h4>
         <div class="center">
         <p> <i class="firstLetter">A </i> fost odată ca niciodată un muschetar mic de statură care umbla mereu prafuit și avea haine rupte, fapt pentru care nu era iubit de nimeni. Însă ce lumea de rând nu știa despre el era că-i atat de puternic încât poate muta munții din loc. El este muschetarul matematicii. Ești gata să rezolvi exercițiile împreună cu el?</p>
      
   </section>



   <section id="jocuri">
         <div class="center">
            <h4>Descoperă unul dintre jocurile următoare!</h4>
            <ul class="jocuri-list">
               <li class="jocuri-item">
                  <a id="usor" href="Game.php?dificultate=usor">
                     <figure class="jocuri-image">
                        <img src="assets/img/mate1.png" alt="Pattern">
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
                  <a id="mediu" href="Game.php?dificultate=mediu" >
                     <figure class="jocuri-image" alt="Pattern">
                        <img src="assets/img/mate2.png">
                       
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
                  <a id="greu" href="Game.php?dificultate=greu">
                     <figure class="jocuri-image">
                        <img src="assets/img/mate3.png" alt="Pattern">
                        <div class="jocuri-image-text">
                           <h6>
                              Dificil
                           </h6>
                        </div>
                     </figure>

                     <div class="jocuri-description">
                        <h6>
                           Completează câmpurile folosind cuvintele potrivit
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
                     <a href="muzicaFriend.php"><img src="assets/img/pian2.jpg" height=166px alt="Pian"></a>
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
                     <a href="mediuFriend.php"><img src="assets/img/palme.jpg" height=166px alt="Planeta Pamant"></a>
                  </figure>
               </li>
            </ul>
         </div>
      </section>


</body>
</html>