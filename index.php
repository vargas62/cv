<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
	<![endif]-->
	<!--[if IE 7]>
	<html class="no-js lt-ie9 lt-ie8" lang="">
		<![endif]-->
		<!--[if IE 8]>
		<html class="no-js lt-ie9" lang="">
			<![endif]-->
			<!--[if gt IE 8]>
			<!-->
			<html class="no-js" lang="">
				<!--
				<![endif]-->
				<head>
					<meta charset="utf-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
					<title>Nicolas briet</title>
					<meta name="description" content="">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
					<link rel="apple-touch-icon" href="apple-touch-icon.png">
					<link rel="stylesheet" href="css/bootstrap.min.css">
					<link rel="stylesheet" href="css/bootstrap-theme.min.css">
					<link rel="stylesheet" href="css/fontAwesome.css">
					<link rel="stylesheet" href="css/tooplate-style.css">
					<link rel="stylesheet" href="css/style.css">
					<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
				</head>
				<body>
					<section class="first-section">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="text-content">
										<h2>BRIET Nicolas</h2>
										<div class="line-dec"></div>
										<span>Développeur web</span>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="second-section">
						<div class="container">
							<div class="row">
							 <div class="appear" data-delai="0">	
								<div class="col-md-3 col-sm-6">
									<div class="service-item">
										<div class="icon">
											<a href ="#XP" class="page-scroll btn btn-xl"><img src="img/first-icon.png" alt="" ></a>
										</div>
										<h4>Mon CV</h4>
										<p>
											Dans cette onglet vous trouverais tout les detail sur mon parcourt proffesionel 
										</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="service-item">
										<div class="icon">
											<a href ="#APPTITUDE" class="page-scroll btn btn-xl"><img src="img/third-icon.png" alt=""></a>
										</div>
										<h4>Mes apptitude</h4>
										<p>
											Dans cette section vous y trouverais les logiciel que je metrisse ainsi que mon niveau en langue vivante et pour finir mes diplomes 
										</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="service-item">
										<div class="icon">
											<a href ="#EXP" class="page-scroll btn btn-xl"><img src="img/second-icon.png" alt=""></a>
										</div>
										<h4>Mon parcourt extraproffesionel</h4>
										<p>
											Dans cette onglet vous aurais tout les detail sur mon parcourt extra professionel 
										</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="service-item">
										<div class="icon">
											<a href ="#CONTACT" class="page-scroll btn btn-xl"><img src="img/third-icon.png" alt=""></a>
										</div>
										<h4>Me contacter</h4>
										<p></p>
									</div>
								</div>
							</div>
						</div>	
						</div>
					</section>
					<section id="XP"  class="third-section">
					<div class="container">
					<div class="row">

						
								
								<center>
									<h4>
										<br>
										Expériences Professionnelles
										<br>
									</h4>
								</center>
								<?php


								include "timeline.html"

								?>
							
						</div>
					</div>
				</div>
			</section>








			<section id="APPTITUDE" class="fourth-section">
				<div class="container">
					<div class="row">
						<div class="appear" data-delai="0">
								<center>
									<h4>
										<br>
										Expériences Professionnelles
										<br>
									</h4>
								</center>
							<?php
							include "apptitude.html"
							?>
						
						</div>
					</div>
				</div>			
		</section>










		<section id="EXP" class="fivth-section">
			<div class="appear" data-delai="0">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="left-text col-md-8">
							<h4>
								<em></em>
								<br>
								Expériences Extra-Professionnelles
							</h4>
							<h4>
								<em>- Développement de serveur sur GTA V</em>
								<br>
							</h4>
							<p>
								dévelopement de serveur sur le jeu "GTA V" en LUA via des serveur priver hebergé sur des serveur distant dnas un data center chez OVH par exemeple 
							</p>
							</br>
							<h4>
								<em>- Développement de serveur minecraft hébergé sur des serveurs a distance </em>
								<br>
							</h4>
							<p>
								dévelopement de serveur sur le jeu "MInecraft" en LUA et JAVA via des serveur priver hebergé sur des serveur distant dnas un data center chez OVH par exemeple 
							</p>
							</br>
							<h4>
								<em>- Développement d’un jeu indépendant avec unity 3d </em>
								<br>
							</h4>
							<p>
								Développement d'un jeu en 2D sur le moteur graphique "UNITY 3D" en langage JAVA et C# 
							</p>
							</br>
						</div>
						<div class="right-image col-md-4">
							<img src="img/right-image.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="CONTACT" class="sixth-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<form id="contact" action="" method="post">
								<div class="col-md-6">
									<fieldset>
										<input name="name" type="text" class="form-control" id="name" placeholder="Nom Prenom..." required>
									</fieldset>
								</div>
								<div class="col-md-6">
									<fieldset>
										<input name="email" type="email" class="form-control" id="email" placeholder=" email..." required>
									</fieldset>
								</div>
								<div class="col-md-12">
									<fieldset>
										<textarea name="message" rows="6" class="form-control" id="message" placeholder=" message..." required></textarea>
									</fieldset>
								</div>
								<div class="col-md-12">
									<fieldset>
										<button type="submit" id="form-submit" class="btn">Envois</button>
									</fieldset>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-5">
						<div class="right-info">
							<ul>
								<li>
									<a href="#"><i class="fa fa-envelope"></i>nicolas.brietpro@gmail.com</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-phone"></i>07 86 99 09 38</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker"></i>357 rue du marais 62134 anvin</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul>
							<li>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-rss"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-dribbble"></i></a>
							</li>
						</ul>
						<p>
							Copyright &copy; 2021 BRIET NICOLAS| Dévellopeur web
						</p>
					</div>
				</div>
			</div>
		</footer>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>
		</script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
