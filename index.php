<!DOCTYPE html>
<html>
<?php session_start(); ?>

<head>
	<!-- Meta tag start-->
	<meta charset="utf-8" />
	<meta name="author" content=" " />
	<meta name="description" content=" " />
	<meta name="keywords" content=" " />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Manco Immoservice</title>
	<meta name="theme-color" content="#ffffff" />
	<meta name="msapplication-navbutton-color" content="#ffffff" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />
	<!-- Meta tag end-->
	<!-- Favicon start -->
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<!-- Favicon end -->
	<!-- CSS and Bootstrap 4 links start -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/flag-icon.min.css" />
	<link rel="stylesheet" href="css/lightgallery.min.css" />
	<link rel="stylesheet" href="css/hamburgers.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.min.css" />
	<link rel="stylesheet" href="css/owl.theme.default.min.css" />
	<link rel="stylesheet" href="css/animated.min.css" />
	<link rel="stylesheet" href="<?= 'css/style.min.css?ver=' . rand(1,999) ?>" />
	<!-- CSS and Bootstrap 4 links end -->
</head>

<body data-spy="scroll" data-target="#nav">
	<!-- Loader start -->
	<!-- <div id="loader"></div> -->
	<!-- Loader end -->
	<!-- App start -->
	<div id="app">
		<!-- Mobile start -->
		<div id="mobile" class="d-md-none">
			<!-- Top menu start -->
			<div id="top-menu">
				<!-- Sidenav start -->
				<div id="btn-sidenav" class="hamburger hamburger--spin d-md-none" data-toggle="collapse" role="button"
				 aria-expanded="false">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
				<!-- Sidenav end -->
				<h4>
					Manco Immoservice
				</h4>
			</div>
			<!-- Top menu end -->
			<!-- Sidenav start -->
			<div id="sidenav">
				<div class="navbar-logo">
					<a href="#home" class="nav-link">
						<img src="img/logo.png" class="logo" alt="img/logo.png" />
					</a>
				</div>
				<nav id="nav">
					<ul>
						<li class="nav-item">
							<a class="nav-link" href="#home">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#dienstleistungen">Dienstleistungen</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#uber-uns">Über<span>uns</span></a>
						</li>
						<!--
						<li class="nav-item">
							<a class="nav-link" href="#reference">Reference</a>
						</li>
-->
						<li class="nav-item">
							<a class="nav-link" href="#kontakt">Kontakt</a>
						</li>
					</ul>
				</nav>
			</div>
			<!-- mySidenav end -->
			<!-- Close nav start -->
			<div id="close-nav"></div>
			<!-- Close nav end -->
		</div>
		<!-- Mobile end -->
		<!-- Navbar start -->
		<div id="navbar" class="fixed-top d-none d-md-block">
			<div class="container-fluid">
				<div class="row align-items-md-center">
					<div class="col-md-4 col-lg-6">
						<div id="logo">
							<a href="#home" class="nav-link">
								<img src="img/logo.png" class="logo" alt="img/logo.png" />
								<h2>
									Manco
									<br />
									Immoservice
								</h2>
							</a>
						</div>
					</div>
					<div class="col-md-8 col-lg-6">
						<nav id="nav" class="navbar float-md-right">
							<ul class="nav nav-pills">
								<li class="nav-item">
									<a class="nav-link" href="#home">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#dienstleistungen">Dienstleistungen</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#uber-uns">Über uns</a>
								</li>
								<!--
								<li class="nav-item">
									<a class="nav-link" href="#reference">Reference</a>
								</li>
-->
								<li class="nav-item">
									<a class="nav-link" href="#kontakt">Kontakt</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- Navbar end -->
		<!-- Home start -->
		<div id="home">
			<!-- Owl carousel start -->
			<div class="owl-carousel owl-theme">
				<div class="item">
					<div class="quote">
						<h1 class="wow fadeIn" data-wow-delay="2s">
							Fachlich kompetent
						</h1>
					</div>
					<div class="quote">
						<h1 class="wow fadeIn" data-wow-delay="3s">
							Zuverlässig
						</h1>
					</div>
					<div class="quote">
						<h1 class="wow fadeIn" data-wow-delay="4s">
							Sauber
						</h1>
					</div>
					<div class="quote">
						<h1 class="wow fadeIn" data-wow-delay="5s">
							Termingerecht
						</h1>
					</div>
				</div>
			</div>
			<!-- Owl carousel end -->
		</div>
		<!-- Home end -->
		<!-- Content start -->
		<div id="content">
			<!-- Services start -->
			<div id="dienstleistungen" class="item-div">
				<div class="container-fluid">
					<div class="heading">
						<h2 class="wow slideInLeft">
							Dienstleistungen
						</h2>
					</div>
					<div class="row">
						<div class="col-md-6 col-lg-4 pt-5 wow slideInUp">
							<div class="icon-div">
								<div class="icon">
									<i class="fas fa-home"></i>
								</div>
							</div>
							<h4>
								Treppenhausreinigung
							</h4>
							<p class="text">
								wir passen die Reinigung Ihren individuellen Bedürfnissen an und sorgen für ein perfektes Erscheinungsbild.
							</p>
							<ul>
								<li>
									Reinigung Treppenhaus und Liftanlage
								</li>
								<li>
									Reinigung von allen Nebenräumen wie Keller, Estrich und Waschküche
								</li>
								<li>
									Reinigung von allen Nebenräumen wie Keller, Estrich und Waschküche
								</li>
								<li>
									Fensterreinigung
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-4 pt-5 wow slideInUp">
							<div class="icon-div">
								<div class="icon">
									<i class="fas fa-home"></i>
								</div>
							</div>
							<h4>
								Gartenunterhalt
							</h4>
							<p class="text">
								Rund um die Liegenschaft führen wir folgende Arbeiten aus:
							</p>
							<ul>
								<li>
									Rasenmähen
								</li>
								<li>
									Schneiden von Hecken, Sträucher
								</li>
								<li>
									Unkraut jäten
								</li>
								<li>
									Laub entfernen
								</li>
								<li>
									Grünschnitt entsorgen
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-4 pt-5 wow slideInUp">
							<div class="icon-div">
								<div class="icon">
									<i class="fas fa-home"></i>
								</div>
							</div>
							<h4>
								Unterhaltsarbeiten
							</h4>
							<p class="text">
								Sicherheit steht an erster Stelle. Wir prüfen regelmässig Ihre technischen Anlagen.
							</p>
							<ul>
								<li>
									Bedienung und Überwachung der Haustechnik
								</li>
								<li>
									Störungsbehebung an Lüftungen, Heizungsanlagen sowie technische Anlagen
								</li>
								<li>
									Überwachung und Meldung von Zählerständen
								</li>
								<li>
									Kontrolle der Radiotorenventile
								</li>
								<li>
									Ausführung von kleineren Reparaturarbeiten
								</li>
								<li>
									Kontrolle der Beleuchtungen
								</li>
								<li>
									Koordination von Handwerkern bei grösseren Reparaturen
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-4 pt-5 wow slideInUp">
							<div class="icon-div">
								<div class="icon">
									<i class="fas fa-home"></i>
								</div>
							</div>
							<h4>
								24h Pikettdienst
							</h4>
							<p class="text">
								Selbstverständlich sind wir für Notfälle auch ausserhalb der Bürozeiten sowie Wochenenden für Sie erreichbar.
							</p>
						</div>
						<div class="col-md-6 col-lg-4 pt-5 wow slideInUp">
							<div class="icon-div">
								<div class="icon">
									<i class="fas fa-home"></i>
								</div>
							</div>
							<h4>
								Winterdienst
							</h4>
							<ul>
								<li>
									Schneeräumung rund um Ihre Liegenschaft ( Fussgängerwege, Eingänge, Parkplätze)
								</li>
								<li>
									Streudienst
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-4 pt-5 wow slideInUp">
							<div class="icon-div">
								<div class="icon">
									<i class="fas fa-home"></i>
								</div>
							</div>
							<h4>
								Wohnungsreinigung
							</h4>
							<p class="text">
								Wir begleiten Sie bei der Wohnungsabnahme und führen anschliessend kleine Reparaturen sowie Reinigungen durch
							</p>
						</div>
						<div class="col-md-6 col-lg-4 pt-5 wow slideInUp">
							<div class="icon-div">
								<div class="icon">
									<i class="fas fa-home"></i>
								</div>
							</div>
							<h4>
								Räumungen
							</h4>
							<p class="text">
								Wir machen Räumungen wie Wohnungen, Keller/Estrich oder Baustellen.
							</p>
						</div>
						<div class="col-md-6 col-lg-4 pt-5 wow slideInUp">
							<div class="icon-div">
								<div class="icon">
									<i class="fas fa-home"></i>
								</div>
							</div>
							<h4>
								Verwaltung
							</h4>
							<p class="text">
								Haben Sie eine Immobilie zu vermieten aber keine Zeit für Besichtigungen? Gerne übernehmen wir für Sie diese
								Termine.
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Services end -->
			<!-- About us start -->
			<div id="uber-uns" class="item-div">
				<div class="heading">
					<h2 class="wow slideInLeft">
						Über uns
					</h2>
				</div>
				<div class="about-us">
					<div class="container">
						<div class="row wow slideInUp">
							<div class="col-md-4">
								<div class="icon text-center mb-3">
									<img src="img/about-us/about-us.jpg" alt="img/about-us/about-us.jpg" />
								</div>
								<h3 class="text-center">
									Manco Vincenzo
								</h3>
							</div>
							<div class="col-md-8">
								<div class="box">
									<p>
										Wir haben langjährige Erfahrung im Bereich Wartung jeglicher Liegenschaften. Unser Arbeitsbereich beinhaltet
										allgemeine Reinigungsarbeiten , Haustechnik, Gartenunterhalt sowie die regelmässige Kontrolle der
										Liegenschaft und deren Umgebung.
									</p>
									<p>
										Flexibilität und Zuverlässigkeit gehören zu unseren Stärken!
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About us end -->
			<!-- Reference start -->
			<!--
			<div id="reference" class="item-div">
				<div class="container">
					<div class="heading">
						<h2 class="wow slideInLeft">
							Referenz
						</h2>
					</div>
				</div>
				<div class="reference-background">
					<div class="container">
-->
			<!-- Owl carousel start -->
			<!--
						<div class="owl-carousel owl-theme">
							<div class="item">
								<div class="row">
									<div class="col-md-6">
										<h4>
											Lorem Ipsum
										</h4>
										<p class="wow fadeIn">
											<em>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since."</em>
										</p>
									</div>
									<div class="col-md-6">
										<h4>
											Lorem Ipsum
										</h4>
										<p class="wow fadeIn">
											<em>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since."</em>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-md-6">
										<h4>
											Lorem Ipsum
										</h4>
										<p class="wow fadeIn">
											<em>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since."</em>
										</p>
									</div>
									<div class="col-md-6">
										<h4>
											Lorem Ipsum
										</h4>
										<p class="wow fadeIn">
											<em>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since."</em>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-md-6">
										<h4>
											Lorem Ipsum
										</h4>
										<p class="wow fadeIn">
											<em>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since."</em>
										</p>
									</div>
									<div class="col-md-6">
										<h4>
											Lorem Ipsum
										</h4>
										<p class="wow fadeIn">
											<em>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since."</em>
										</p>
									</div>
								</div>
							</div>
						</div>
-->
			<!-- Owl carousel end -->
			<!--
					</div>
				</div>
			</div>
-->
			<!-- Reference end -->
			<!-- Contact start -->
			<div id="kontakt" class="item-div">
				<?php
					if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
						require_once 'flash.php';
						session_destroy();
					}
				?>
				<div class="container">
					<div class="heading">
						<h2 class="wow slideInLeft">
							Kontakt
						</h2>
					</div>
					<div class="row wow slideInUp">
						<div class="col-md-4">
							<p class="key">
								Adresse:
							</p>
							<p class="value">
								Manco Immoservice,<br />
								obere Rebgasse 14b,<br />
								4314 Zeiningen
							</p>
						</div>
						<div class="col-md-4">
							<p class="key">
								Telefon:
							</p>
							<p class="value">
								076 559 95 45
							</p>
						</div>
						<div class="col-md-4">
							<p class="key">
								Mailkontakt:
							</p>
							<p class="value">
								<a href="mailto:info@mancoimmoservice.ch" target="_blank" title="Kontaktiere mich">
									info@mancoimmoservice.ch
								</a>
							</p>
						</div>
					</div>
					<div class="row pt-3 wow slideInUp">
						<div class="col-md-6 pb-5 pb-md-0">
							<h3 class="mb-3">
								Kontakt Formular
							</h3>
							<form method="POST" action="phpform.php">
								<div class="form-group">
									<label>
										Firmenname <span>*</span>
									</label>
									<input name="comapny_name" type="text" class="col-md-8 form-control" required />
								</div>
								<div class="form-group">
									<label>
										Vor- und Nachname <span>*</span>
									</label>
									<input name="full_name" type="text" class="col-md-8 form-control" required />
								</div>
								<div class="form-group">
									<label>
										Emailadresse <span>*</span>
									</label>
									<input name="email" type="email" class="col-md-8 form-control" required />
								</div>
								<div class="form-group">
									<label>
										Telefonnummer <span>*</span>
									</label>
									<input name="phone" type="tel" class="col-md-8 form-control" required />
								</div>
								<div class="form-group">
									<label>
										Betreff <span>*</span>
									</label>
									<input name="subject" type="text" class="col-md-8 form-control" required />
								</div>
								<div class="form-group">
									<label>
										Nachricht <span>*</span>
									</label>
									<textarea name="message" class="form-control" rows="5"></textarea>
									<span>*</span> erforderlich
								</div>
								<button name="btn_submit" type="submit" class="btn btn-primary">
									Einreichen
								</button>
							</form>
						</div>
						<div class="col-md-6">
							<h3 class="mb-4">
								Karte
							</h3>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2693.509449803798!2d7.874151415188083!3d47.53841267918017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47904bb1f1e066d5%3A0xcedc0cc2cd62e2af!2sObere+Rebgasse+14%2C+4314+Zeiningen%2C+Switzerland!5e0!3m2!1sen!2srs!4v1546620980419"
							 width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
			<!-- Contact end -->
		</div>
		<!-- Content end -->
		<!-- Back to top start -->
		<a href="javascript:void(0)" id="back-to-top" title="Back to top">
			<i class="fas fa-arrow-up"></i>
		</a>
		<!-- Back to top end -->
	</div>
	<!-- App end -->
	<!-- JavaScript links start -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/lightgallery.min.js"></script>
	<script type="text/javascript" src="js/lg-thumbnail.min.js"></script>
	<script type="text/javascript" src="js/lg-fullscreen.min.js"></script>
	<script type="text/javascript" src="js/lg-zoom.min.js"></script>
	<script type="text/javascript">
		lightGallery(document.getElementById('lightgallery'));
	</script>
	<script type="text/javascript" src="js/all.min.js"></script>
	<script type="text/javascript" src="<?= 'js/main.js?ver=' . rand(1,999) ?>"></script>
	<!-- JavaScript links end -->
</body>

</html>