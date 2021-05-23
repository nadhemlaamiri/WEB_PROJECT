<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="UTF-8">
	
	<!-- Remove this line if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="viewport" content="width=device-width">
	
	<meta name="description" content="Designa Studio, a HTML5 / CSS3 template.">
	<meta name="author" content="Sylvain Lafitte, Web Designer, sylvainlafitte.com">
	
	<title>Inscription // Study Tour Dubai 2022</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="shortcut icon" type="image/png" href="favicon.png">
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
	
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>



<body>
<!-- Prompt IE 7 users to install Chrome Frame -->
<!--[if lt IE 8]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<div class="container">

	<header id="navtop">
		<a href="index.html" class="logo fleft">
			<img src="img/logo.png" alt="Designa Studio">
		</a>
		
		<nav class="fright">
			<ul>
				<li><a href="index.html">Accueil</a></li>
				<li><a href="about.html">Comité</a></li>
			</ul>
			
			<ul>
				<li><a href="works.html">Tombola</a></li>
				<li><a href="services.php" class="navactive">Inscription</a></li>
			</ul>
			<ul>
				<li><a href="sponsors.html">Sponsors officiels</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
         <table align="right">
        <tr>  <td><img src="img/sponsor/24.jpg"></td> </tr> 
        </table>	
	</header>


	<div class="services-page main grid-wrap">

		<header class="grid col-full">
			<hr>
			<p class="fleft">Inscription</p>
		</header>


		<aside class="grid col-one-quarter mq2-col-full">
			<p class="mbottom"> Nous vous informons que le Study Tour concerne seulement les étudiants de <font color="#3366FF"> ISAMM </font> et <font color="#3366FF"> ESC </font>.
			</p><p>Le frais d'inscription est de <font color="#FF0000"> 20 DT </font> à donner au responsable de finance.</p>
			<menu>
				<ul>
					<li><a href="#navbutton" class="arrow">Inscription</a></li>
					<li><a href="#navtogg" class="arrow">Liste des inscrits</a></li>
				</ul>
			</menu>
		</aside>
		
		<section class="grid col-three-quarters mq2-col-full">
		
			
			
			<div class="grid-wrap">
			
			<article id="navbutton" class="grid col-full">
				<h2>Inscription</h2>
                
                <form id="contact_form" class="contact_form" action="inscription.php" method="post" name="inscription_form">	
				<ul>
					<li>
						<label for="name">Nom & Prénom :</label>
						<input type="text" name="name" id="name" required class="required" >
					</li>
                    <li>
						<label for="mastère">Spécialité :</label>
                        <select name="promotion">
                        <option value="1">BIGDATA</option>
                        <option value="2">Informatique et multimédia</option>
                        <option value="3">Micro-Informatique & Machines Embarquées</option>
                        </select>
					</li>
                    <li>
						<label for="tel">Numèro de téléphone :</label>
						<input type="text" name="tel" id="name" required class="required" >
					</li>
					<li>
						<label for="email">Email :</label>
						<input type="email" name="email" id="email" required placeholder="adress@domain.com" class="required email">
					</li>	
					<li>
						<label for="motivation">Motivation :</label>
						<textarea name="motivation" id="message" cols="100" rows="6" required  class="required" ></textarea>
					</li>
					<li>
						<button type="submit" id="submit" name="submit" class="button fright">Valider</button>
					</li>	
				</ul>			
			</form>

                
			</article>
		
        <?php
		$con = new mysqli( "localhost","root","");
		if ($con->connect_error) {die ("erreur de connexion");}
		$con->select_db("study_tour_dubai") ;
		
		?>
			<article id="navtogg" class="grid col-full">
				<h2>Liste des inscrits</h2>
						<ul class="toggle-view">
							<li>
								<h5 class="toggle-title">BIGDATA  <span class="toggle-title-detail">- toutes les promotions</span></h5>
								<div class="toggle grid-wrap">                     
									<ul class="grid col-one-half mq3-col-full">
                                    <?php
									$req="select * from inscrit where specialite = 1;";
									$res = $con->query($req);
									while ($row = $res->fetch_array())
									{
									
									echo	"<li> ". $row['nom'] ."</li>";
                                        
                                      } ?>
									</ul>
									
                                    
								</div>       
							</li>
							
                            
                            <li>
								<h5 class="toggle-title">Informatique et multimédia  <span class="toggle-title-detail">- toutes les promotions</span></h5>
								<div class="toggle grid-wrap">                     
									<ul class="grid col-one-half mq3-col-full">
										<?php
									$req="select * from inscrit where specialite = 2;";
									$res = $con->query($req);
									while ($row = $res->fetch_array())
									{
									
									echo	"<li> ". $row['nom'] ."</li>";
                                        
                                      } ?>
									
									
									</ul>
									
								</div>       
							</li>
							
                            <li>
								<h5 class="toggle-title">Micro-Informatique & Machines Embarquées  <span class="toggle-title-detail">- toutes les promotions</span></h5>
								<div class="toggle grid-wrap">                     
									<ul class="grid col-one-half mq3-col-full">
										<?php
									$req="select * from inscrit where specialite = 3;";
									$res = $con->query($req);
									while ($row = $res->fetch_array())
									{
									
									echo	"<li> ". $row['nom'] ."</li>";
                                        
                                      } ?>
									</ul>
									
								</div>       
							</li>
							
                            
							
						</ul>
			</article>
			
			
			</div> <!-- 100%articles-->
		
		</section>	
		
		
		
	</div> <!--main-->
<div>
	<footer class="grid-wrap">
		<table align="center" width="100%">
        <tr> <td><img src="img/sponsor/22.jpg"></td> <td align="center"><img src="img/sponsor/23.jpg"></td> <td align="center"><img src="img/sponsor/29.png"></td> <td align="right"><img src="img/sponsor/31.png"></td> </tr>
        <tr> <td><img src="img/sponsor/33.png"></td> <td align="center"><img src="img/sponsor/34.png"></td> <td align="center"><img src="img/sponsor/37.png"></td> <td align="right"><img src="img/sponsor/38.png"></td> </tr>
        
        </table>		<br> <hr>
		<div class="up grid col-one-third ">
			<a href="#navtop" title="Go back up">&uarr;</a>
		</div>
		<nav class="grid col-one-third ">
			<ul>
				<li><a href="index.html">Accueil</a></li>
				<li><a href="services.php">Inscription</a></li>
				<li><a href="sponsors.html">Sponsors officiels</a></li>
				<li><a href="contact.html">Contact</a></li>
                <li><a href="about.html">Comité</a></li>
			</ul>
		</nav>
	</footer>
</div>

</div>

<!-- Javascript - jQuery -->
<script src="http://code.jquery.com/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

<!--[if (gte IE 6)&(lte IE 8)]>
<script src="js/selectivizr.js"></script>
<![endif]-->

<script src="js/scripts.js"></script>

<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID. -->
<script>
  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>