<?php 
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <title>Poveste</title>
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
         <h3>Povestea prietenilor muschetari!</h3>
         <h4>Împreună totul este mai ușor!</h4>
         <div class="center">
         <p> <i class="firstLetter">C </i>ântecul, natura și precizia incontestabilă a ei ne-au fost mereu alături de cand s-a aprins
         pământul. În zilele noastre, trei muschetari curajosi au îndrăznit să-și ia misiunea de a împărtași tuturor pasiunea lor pentru
         cei trei M: Matematică, Muzică și Mediu înconjurător. </p>
         <br/>
         <p>Să-i cunoaștem pe cei trei curajoși care-ți vor deveni în curând prieteni!</p>
         <br/>
         <p><b>Matematică</b> - un muschetar mic de statură care umbla mereu prafuit și avea haine rupte, fapt pentru care nu era iubit de nimeni. Însă ce lumea de rând nu știa despre el era că-i atat de puternic încât poate muta munții din loc.</p>
         <br/>
         <p><b>Muzică</b> - un muschetar elegant care trăia într-un castel de cristal. În fiecare cameră avea câte o colecție de instrumente. Știa să mânuiască cu pricepere orice vioară, harpă sau contrabas. Puterile lui cele mai mari erau blândețea și răbdarea.</p>
         <br/>
         <p><b>Mediu înconjurător</b> - un muschetar mare ca un munte, dar vesel si bun care a străbătut în viața lui lumea în lung și-n lat, peste mări și țări. El se întristează când se defrișează pădurile sau se devarsă deșeuri în mările noastre.</p>
         <br/>
         <p>Ai ocazia să devii unul dintre ei, să le cunoști și să le prețuiești valorile: Concentrare și curaj ~ Energie și veselie! ~ Responsabilitate și explorare!</p>

   </section>

   <section id="colegi">
         <h3>Bravi muschetari</h3>
         <h4>Alege o arie în care să-ti încerci cunoștințele!</h4>
         <div class="center">
             <div class="line">
               </div>
             <div class="line2">
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
                     <a href="mateFriend.php"><img src="assets/img/numaratoare.jpg" height=166px></a>
                  </figure>
               </li>
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
                     <strong>Mediu inconjurător <br /> Responsablitate și explorare</strong>
                     <p>   "Natura este uluitoare! În jurul nostru traiesc sute de specii de
                     animale și plante pe care trebuie să le protejăm. Haide să vedem ce
                     secrete nebanuite se ascund aproape de noi!" <br /> <b>- Muschetarul Mediului înconjurător</b>
                     </p>
                  </div>
                  <figure>
                     <a href="mediuFriend.php"><img src="assets/img/palme.jpg" height=166px></a>
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