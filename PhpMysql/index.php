<!DOCTYPE HTML>
<html>
	<head>
		<title>	Bilgisayar Mağazası</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.php" class="logo"><strong>Bilgisayar Mağazası</strong></a>
					<nav>
						<a href="#menu">Menu</a>
					</nav>
				</header>
			<!--PHP Bağlantıları-->
			<?php
			include("nav.php");		
			include("banner.php");			
			include("FeaturedProducts.php");			
			include("BlogPosts.php");			
			include("Footer.php");?>
				<!-- Main -->
				<div id="main">

								<!-- Footer -->
								<footer id="footer">
					<div class="inner">
						<ul class="copyright">
							<li>Telif Hakkı ©2020 Tüm hakları saklıdır</li>
						</ul>
					</div>
				</footer>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>