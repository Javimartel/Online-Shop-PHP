<?php 
	session_start();

	if(isset($_SESSION["user"])) {
		$index = true;
		include "./controllers/numberCart.php";
	}

?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Javi - Tienda</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="format-detection" content="telephone=no">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="author" content="">
	    <meta name="keywords" content="">
	    <meta name="description" content="">
	    <link rel="stylesheet" type="text/css" href="./fonts/icomoon/icomoon.css">
	    <link rel="stylesheet" type="text/css" href="./css/slick.css"/>
		<link rel="stylesheet" type="text/css" href="./css/slick-theme.css"/>
		<link rel="stylesheet" type="text/css" href="./css/magnific-popup.css"/>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

		<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css"/>
	    <link rel="stylesheet" type="text/css" href="./css/style.css">

	</head>
<body>

<div id="main-wrapper" class="overflow-hidden">
	<div class="header-top-menu bg-black color-secondary">
		<div class="container">
			<div class="row">
				<div class="wrap flex-container padding-small">
					<?php 
						if (isset($_SESSION["user"])) {
							echo "<div class='contact-block'>
								<span class='pr-50'><i class='fa-solid fa-user'></i> ".$_SESSION["user"]["nick"]."</span>
								<span class='color-secondary'><i class='icon icon-envelope-o'></i><a href='#'> ".$_SESSION["user"]["email"]."</a></span>
							</div>";
						} else {
							echo "<div class='contact-block'>
								<span class='pr-50'><i class='fa-solid fa-user'></i> Usuario</span>
								<span class='color-secondary'><i class='icon icon-envelope-o'></i><a href='#'> Email</a></span>
							</div>";
						}
					?>

				<div class="header-top-right">
					<ul class="list-unstyled d-flex color-secondary">
					<?php if (isset($_SESSION["user"])) {
						echo "<li class='pr-50'><a href='./views/login-register.php?logout'>Desconectar</a></li>";
					} else {
						echo "<li class='pr-50'><a href='./views/login-register.php'>Login/Register</a></li>";
					}
					?>
						<li class="pr-50"><a href="#">FAQs</a></li>
						<li><a href="#">Ayuda</a></li>
					</ul>
				</div>

				</div><!--flex-container-->

			</div>
		</div>
	</div><!----top-menu---->

	<header id="header">
		<div class="container">
			<div class="row">

				<nav class="navbar navbar-expand-lg col-md-12">

					<div class="navbar-brand">
						<a href="./index.php">
							<img src="./images/img-template/main-logo.png" alt="logo">
						</a>
					</div>

					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#slide-navbar-collapse" aria-controls="slide-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"><i class="icon icon-navicon"></i></span>
					</button>

					<div class="navbar-collapse collapse" id="slide-navbar-collapse">
					<ul class="navbar-nav list-inline text-uppercase">
						<li class="nav-item text-hover active"><a href="./index.php" class="nav-link" data-effect="Home">Inicio</a></li>
						<li class="nav-item text-hover"><a href="./views/shop.php" class="nav-link" data-effect="Shop">Tienda</a></li>
						<li class="nav-item text-hover"><a href="./views/about.php" class="nav-link" data-effect="About Us">Sobre nosotros</a></li>
						<li class="nav-item text-hover"><a href="./views/contact.php" class="nav-link" data-effect="Contact">Contáctanos</a></li>
						<!-- <li class="nav-item text-hover"><a href="./views/blog.php" class="nav-link" data-effect="Blogs">Blog</a></li> -->

						<li class="nav-item dropdown">
							<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle">Páginas</a>
							<ul class="dropdown-menu">
								<li><a href="./views/blog.php" class="dropdown-item">Blog</a></li>
								<li><a href="./views/single-post.php" class="dropdown-item">Post simple</a></li>
								<li><a href="./views/single-product.php" class="dropdown-item">Producto simple</a></li>
							</ul>
						</li>

					</ul>
				</div>

					<div class="action-menu">
						<div class="searchbar">
							<a href="#" class="search-button search-toggle" data-selector=".navbar">
								<i class="icon icon-search"></i>
							</a>
							<form role="search" method="get" class="search-box" action="">
								<input class="search-field text search-input" placeholder="Buscar" type="search">
							</form>
						</div>
					<div class="shopping-cart">
						<a href="#">
							<i class="icon icon-shopping-cart"></i>
						</a>
						<?php if (isset($_SESSION["user"])) {
							echo '<sub class="carrito">'.$elementos_carrito[0].'</sub>';
						}
						?>
					</div>
					</div><!--action-menu-->

				</nav>

			</div>		
		</div>

	</header>

