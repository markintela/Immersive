<!DOCTYPE HTML>


<html>
<head>
	<title>Immersive - Degree</title>


	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!--BOOTSTRAP -->
	<link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css" />
	<script src="assets/bootstrap/jquery.min.js"></script>
	<script src="assets/bootstrap/bootstrap.min.js"></script>
	<script src="assets/bootstrap/numbercases.js"></script>
    

	<script src='https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.8.2/countUp.min.js'></script>
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/images/favicon.ico" type="image/x-icon">

</head>
<body>

	<!-- Header -->
	<header id="header">

		<!-- Logo -->
		<h1 id="logo"><a href="#intro"><img  src="images/logo.png" style="height: 50px;margin-top: 10px;"/></a> </h1>


		<!-- Nav -->
		<nav id="nav">
			<ul>
				<!-- <img src="images/street-view-trusted.png" style="height: 35px;  margin-top: 15px; "> -->
				<li><a href="#intro">Home</a></li>
				<li><a href="#one">Custom Interactive Tour</a></li>
				<li><a href="#two">Google Street View</a></li>
				<li><a href="#work">Show Cases</a></li>
				<li><a href="#contact">Contact</a></li>

			</ul>
		</nav>

	</header>

	<!-- Intro -->
	<section id="intro" class="main style1 dark fullscreen">
		<div class="content container 75%">
			<header>
				<!--<h2>Session2</h2>-->

			</header>
			<p class="init">Thanks for visiting my <strong> website,</strong>  developed for you know more about how you can improve your visibility and publicity. In case of doubts or requests for services<strong> <a href="#contact"
				>contact me</a></strong>
				.</p>
				<footer>
					<a href="#one" class="button style2 down">More</a>
				</footer>
			</div>
		</section>

		<!-- One -->
		<section id="one" class="main style2 right dark fullscreen">
			<div class="content box style2">
				<header>
					<h2>Custom Interactive Tour</h2>
				</header>
				<p>A custom tour allow you create hotspots and show specific information by photo or video, becoming the tour interactive for your customers and give you control about the content.</p>
				
			</div>
			<a href="#two" class="button style2 down anchored">Next</a>
		</section>

		<!-- Two -->
		<section id="two" class="main style2 left dark fullscreen">
			<div class="content box style2">
				<header>
					<h2>Google Street View</h2>
				</header>
				<p>Make your business visible in the bigger search site of the world, people want to know about you. After publish a Google Street View tour it´s automatically integrated with Google Maps and Google My Business. You also can incorporate it in your website and facebook page.</p>

				<p><iframe src="https://player.vimeo.com/video/185365634?title=0&byline=0&portrait=0" width="100%" height="230" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></p>
			</div>
			<a href="#work" class="button style2 down anchored">Next</a>
		</section>

		<!-- Work -->
		<section id="work" class="main style3 primary">
			<div class="content container">
				<header>
					<h2>Show Cases</h2>
					<p>Click and check out some virtual tours.</p>
				</header>

				<!-- Lightbox Gallery  -->
				<div class="container 75% gallery">
					<div class="row 0% images " >


						<div class="row">

							<div class="col-xs-6 col-md-3">
								<a href="" class="thumbnail" data-toggle="modal" data-target="#apollo">
									<img src="images/apollo.jpg" alt="Apollo Language Centre" />

								</a>
						
							</div>


							<div class="col-xs-6 col-md-3">
								<a href="" class="thumbnail" data-toggle="modal" data-target="#dog">
									<img src="images/dog.jpg" alt="The Dog Father" />
								</a>
					
							</div>


							<div class="col-xs-6 col-md-3">
								<a href="" class="thumbnail" data-toggle="modal" data-target="#alpha">
									<img src="images/alpha.jpg" alt="Rede Alpha Fitness" />
								</a>
							
							</div>

							<div class="col-xs-6 col-md-3">
								<a href="" class="thumbnail" data-toggle="modal" data-target="#orange">
									<img src="images/orange.jpg" alt="Orange Terrace Hostel" />
								</a>
						
							</div>


						</div>


					</div>

				</div>

			</div>
		</section>


		<!-- Contact -->
		<section id="contact" class="main style3 secondary">
			<div class="content container">
				<header>
					<h2>Contact.</h2>
					<p>Send me a message.</p>
				</header>
				<div class="box container 75%">

					<!-- Contact Form -->
					<form method="post" action="envio.php">
						<div class="row 50%">
							<div class="6u 12u(mobile)"><input type="text" name="nome" placeholder="Name" required="required"/></div>
							<div class="6u 12u(mobile)"><input type="email" name="email" placeholder="Email" required="required"/></div>
						</div>
						<div class="row 50%">
							<div class="12u"><textarea name="mensagem" placeholder="Message" rows="6" required="required"></textarea></div>
						</div>
						<div class="row">
							<div class="12u">
								<ul class="actions">
									<li><input type="submit" value="Send" /></li>
								</ul>
							</div>
						</div>
					</form>

				</div>
			</div>
		</section>

<?php

if(isset($_GET['message'])){

	
	$var = "<script>
  $(document).ready(function(){
    
    	alert('Mensagem Enviada!');
    
    
  });
  </script>";

echo $var;
}



 ?>


		<!-- Footer -->
		<footer id="footer">

			<!-- Icons -->
			<ul class="actions">
				<li><a href="http://twitter.com/markintela" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
				<li><a href="https://www.facebook.com/mqtrusted" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
				<li><a href="http://plus.google.com/u/0/+MarcusQuintela182" class="icon fa-google-plus" target="_blank"><span class="label">Google+</span></a></li>					
				<li><a href="http://instagram.com/mqtrusted" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
			</ul>

			<!-- Menu -->
			<ul class="menu">
				<li>&copy; MQ Trusted </li><li>2020 </li>
			</ul>

		</footer>

		<!-- MODAL ALPHA -->

		<div class="modal fade" id="alpha" role="dialog" style="margin-top: 60px;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Alpha Fitness</h4>
					</div>
					<div class="modal-body">
						<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1spt-BR!2sus!4v1474248489361!6m8!1m7!1sXG_AHnPy8FYAAAQvvTsXtQ!2m2!1d-13.00597785923563!2d-38.52691211304887!3f65.35038583815385!4f-0.4394490921088732!5f0.4000000000000002" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- FIM MODAL ALPHA -->

	<!-- MODAL DOG -->

	<!-- Modal -->
	<div class="modal fade" id="dog" role="dialog" style="margin-top: 60px;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">The Dog Father</h4>
				</div>
				<div class="modal-body">
					<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1spt-BR!2sbr!4v1473560333917!6m8!1m7!1s4lHn-x3x-D8AAAQvO_SnZA!2m2!1d-12.88657142490796!2d-38.29767340429055!3f330.31256302815024!4f-16.401734865295168!5f0.7820865974627469" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- FIM MODAL DOG -->

<!-- MODAL APOLLO -->

<!-- Modal -->
<div class="modal fade" id="apollo" role="dialog" style="margin-top: 60px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Apollo Language Centre</h4>
			</div>
			<div class="modal-body">
				<iframe src="https://www.google.com/maps/embed?pb=!4v1541587506514!6m8!1m7!1sCAoSLEFGMVFpcE5ydjVuMjJKNXQwMzM1Q2FTSkxOR1hPVnBkT3pVNDFKZTFXd2M1!2m2!1d53.33557278798769!2d-6.248993357335848!3f258.46175252521397!4f1.1762782060140893!5f0.4000000000000002" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			</div>
		</div>

	</div>
</div>
</div>
<!-- FIM MODAL APOLLO -->


<!-- MODAL ORANGE TERRACE -->

<!-- Modal -->
<div class="modal fade" id="orange" role="dialog" style="margin-top: 60px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Orange Terrace Hostel</h4>
			</div>
			<div class="modal-body">
				<iframe src="https://www.google.com/maps/embed?pb=!4v1541587630944!6m8!1m7!1sCAoSLEFGMVFpcFA2VjdfZ1ppR2lHYWd0ekM4bGdVcHlZcU04eUN5eXJfMmFYYTlh!2m2!1d37.08863217128656!2d-8.25461954990567!3f295.619257568882!4f3.2278923295070427!5f0.4000000000000002" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			</div>
		</div>

	</div>
</div>
</div>
<!-- FIM MODAL MICHEL -->




<div  id="message" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      Mensagem enviada!
    </div>
  </div>
</div>






<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.poptrox.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>


<!-- GOOGLE ANALYTICS -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-83956864-1', 'auto');
ga('send', 'pageview');

</script>

</body>
</html>