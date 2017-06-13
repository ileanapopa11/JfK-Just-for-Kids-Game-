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
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style_admin.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400i" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- diacritice -->
	<link rel="icon" type="image/x-icon" href="assets/img/logo5.png">
</head>
<body>

	<div id="jfk">
		<header>
			<div class="center">
				<a href="/" title="Admin's Page for JFK" class="logo">MW</a>
			
			<nav>
				<ul>
					<li><a href="#" class=""><span><i class="fa fa-key" aria-hidden="true"></i>Schimbă parola</span></a></li>
					<li id="deconectare"><a href="index.html"><span><i class="fa fa-sign-out" aria-hidden="true"></i>Deconectare</span></a></li>
				</ul>
			</nav>
			<!-- <div id="deconectare">-->
			<div class="middle">
				<h2>Bun venit!</h2>
				<h1>Cei 3 Muschetari<br/>...de pe WWW</h1>
				<a href="#print"><button>CE MAI E NOU?</button></a>
				
			</div> 
			</div>
		</header>


		<section id="viz">
			<!-- <div class="center"> -->
				<div class="left">
					<nav>
					<ul>
						<li><a href="#" class=""><span><i class="fa fa-home" aria-hidden="true"></i>Acasă</span></a></li>
						<li><a href="assets/php/statistici.php" class=""><span><i class="fa fa-bar-chart" aria-hidden="true"></i>Statistici</span></a></li>
						<li><span>Vizualizare</span></li>
						<li><a href="#print"><span><i class="fa fa-search" aria-hidden="true"></i>Nefiltrată</span></a></li>
						<li><a href="#print"><span><i class="fa fa-search" aria-hidden="true"></i>Filtrată</span></a></li>
						<li><span>Modificare</span></li>
						<li><a href="#at"><span><i class="fa fa-plus-circle" aria-hidden="true"></i>Adăugare test</span></a></li>
						<li><a href="#st"><span><i class="fa fa-minus-circle" aria-hidden="true"></i>Ștergere test</span></a></li>
						<li><a href="#mod"><span><i class="fa fa-check-circle" aria-hidden="true"></i>Modificare test</span></a></li>
						<li><a href="#st"><span><i class="fa fa-ban" aria-hidden="true"></i>Ștergere utilizator</span></a></li>
						<li><span>Feedback</span></li>
						<li><a href="#fb"><span><i class="fa fa-share" aria-hidden="true"></i>De la utilizatori</span></a></li>
						<li><a href="#fb"><span><i class="fa fa-reply" aria-hidden="true"></i>Pentru utilizatori</span></a></li>
					</ul>
					</nav>
				</div>

				<div class="right">
					<h3>Vizualizare</h3>
					<h4><i class="fa fa-info-circle" aria-hidden="true"></i>Informaţiile din baza de date în acest moment<i class="fa fa-info-circle" aria-hidden="true"></i></h4>
					<ul class="viz-list">
						<li class="viz-item">
							<a id="print" href="assets/php/vizcopii.php">
								<figure id="invatacei" class="viz-image">
									<img src="assets/img/viz-1.jpg" alt="copii">
									<div class="viz-image-text">
									<h6>Învăţăcei</h6>
									</div>
								</figure>
								<div class="viz-description">
									<p>Utilizatorii elevi</p>
								</div>
							</a>
						</li>
						
						<li class="viz-item">
							<a href="assets/php/vizparinti.php">
								<figure class="viz-image">
									<img src="assets/img/viz-2.jpg" alt="parinti">
									<div class="viz-image-text">
									<h6>Părinţi</h6>
									</div>
								</figure>
								<div class="viz-description">
									<p>Utilizatorii tutori</p>
								</div>
							</a>
						</li>
						<li class="viz-item">
							<a href="assets/php/vizteste.php">
								<figure class="viz-image">
									<img src="assets/img/viz-3.jpg" alt="teste">
									<div class="viz-image-text">
									<h6>Teste</h6>
									</div>
								</figure>
								<div class="viz-description">
									<p>Testele introduse</p>
								</div>
							</a>
						</li>
						</ul>
						<form action="assets/php/oriceselect.php" method="post">
							<h4>Dacă dorești orice altă informaţie, introdu fraza select corespunzătoare în câmpul de mai jos:</h4><br>
							<input type="text" name="select">
							<input type="submit" value="Trimite">
						</form>
				</div>
		</section>

		<section id="mod">
			<div class="left"></div>
			<div class="right">
				<h3>Modificare</h3>
				<div class="modificare">
					<h5>Adăugare test</h5>
					<form id="at" method="POST" action="assets/php/adaugaretest.php">
						<div>
							<i class="fa fa-list" aria-hidden="true"></i>
							<select name = "domeniu">
								<option  value="matematica">Matematica</option>
  								<option  value="muzica">Muzica</option>
  								<option  value="mediu">Mediul</option>
							</select>
						</div>
						<div>
							<i class="fa fa-level-up" aria-hidden="true"></i>
							<select name = "dificultate">
								<option  value="usor">Usor</option>
  								<option  value="mediu">Mediu</option>
  								<option  value="greu">Greu</option>
							</select>
						</div>
						<div class="afisat">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
							<input type="text" name="intrebare1" placeholder="Intrebare1" required>	
							<i class="fa fa-exclamation-circle" aria-hidden="true"></i>
							<input type="text" name="raspuns1" placeholder="Raspuns1" required>
						</div>
						<div class="afisat">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
							<input type="text" name="intrebare2" placeholder="Intrebare2" required>
							<i class="fa fa-exclamation-circle" aria-hidden="true"></i>
							<input type="text" name="raspuns2" placeholder="Raspuns2" required>
						</div>
						<div class="afisat">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
							<input type="text" name="intrebare3" placeholder="Intrebare3" required>
							<i class="fa fa-exclamation-circle" aria-hidden="true"></i>
							<input type="text" name="raspuns3" placeholder="Raspuns3" required>
						</div>
						<div class="neafisat" id="afis">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
							<input type="text" name="intrebare4" placeholder="Intrebare4">
							<i class="fa fa-exclamation-circle" aria-hidden="true"></i>
							<input type="text" name="raspuns4" placeholder="Raspuns4">
						</div>
						<div class="neafisat" id="afis5">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
							<input type="text" name="intrebare5" placeholder="Intrebare5">
							<i class="fa fa-exclamation-circle" aria-hidden="true"></i>
							<input type="text" name="raspuns5" placeholder="Raspuns5">
						</div>
						<div class="neafisat" id="afis5">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
							<input type="text" name="intrebare6" placeholder="Intrebare6">
							<i class="fa fa-exclamation-circle" aria-hidden="true"></i>
							<input type="text" name="raspuns6" placeholder="Raspuns6">
						</div>
						<div class="neafisat" id="afis5">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
							<input type="text" name="intrebare7" placeholder="Intrebare7">
							<i class="fa fa-exclamation-circle" aria-hidden="true"></i>
							<input type="text" name="raspuns7" placeholder="Raspuns7">
						</div>

						<div> <input type="button" name="Inca o intrebare" value="inca" onClick="incauna()"> </div>

				<script>
					         function incauna()
					         {  
			            		var element=document.getElementsByClassName("neafisat")[0];
			            		element.classList.remove('neafisat');
			            		element.classList.add('afisat');
			        		 }
				</script>
						<div>
						<div>
							<p>Link-ul sugerat pentru rezolvare (optional)</p>
							<i class="fa fa-external-link" aria-hidden="true"></i>
							<input type="text" name="link" placeholder="Link">
						</div>
							<input type="submit" value="Trimite">
						</div>
					</form>
				</div>
				<div class="modificare">
					<h5>Ștergere test</h5>
					<form id="st" method="POST" action="assets/php/stergeretest.php">
						<div>
							<p>(matematica/muzica/mediul)</p>
							<i class="fa fa-list" aria-hidden="true"></i>
							<input type="text" name="domeniu" placeholder="Domeniu">
						</div>
						<div>
						<i class="fa fa-search" aria-hidden="true"></i>
							<input type="text" name="id" placeholder="Id-ul testului">
						</div>
						<div>
							<input type="submit" value="Trimite">
						</div>
					</form>
				</div>
				<div class="modificare">
					<h5>Ștergere utilizator</h5>
					<form id="su" method="POST" action="assets/php/stergereutilizator.php">
						<div>
						<p>
							Odată cu ştergerea contului unui părinte, se şterg automat din baza de date toate conturile copiilor acestuia.<br>
							Dacă se şterg toate conturile copiilor unui părinte, nu se şterge din baza de date şi contul părintelui.
						</p>
						<i class="fa fa-search" aria-hidden="true"></i>
							<input type="text" name="id" placeholder="Id-ul utilizatorului">
						</div>
						<div>
							<input type="submit" value="Trimite">
						</div>
					</form>
				</div>
			</div>
		</section>
		<section id="fb">
			<div class="right">
				<h3>Feedback</h3>
				<div class="feedback">
					<h5>Feedback de la utilizatori</h5>
					<div id="fbu">
					<p>Sugestii primite de la părinţi: link-uri pentru conceperea testelor</p>
					<a href = "assets/php/linkuri.php"> <button>Vezi sugestiile</button></a>
					</div>
				</div>
				<div class="feedback">
					<h5>Feedback pentru utilizatori</h5>
					<form id="mail" method="POST" action="assets/php/feedback.php">
						<div>
							<i class="fa fa-search" aria-hidden="true"></i>
								<input type="text" name="id" placeholder="Id-ul utilizatorului">
						</div>
						<div>
							<i class="fa fa-commenting" aria-hidden="true"></i>
								<input type="text" name="comentarii" placeholder="Comentarii">
						</div>
						<div>
							<input type="submit" value="Trimite">
						</div>
					</form>
				</div>
			</div>
		</section>
		</div>
		<footer></footer>

</body>
</html>
<script type="text/javascript">
  document.getElementById("deconectare").onclick=function()
  {
    document.location = "assets/php/logout.php";
  }
</script>