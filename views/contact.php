<?php include "./parts/header-views.php";?>

	<header id="header">
		<div class="container">
			<div class="row">

			<nav class="navbar navbar-expand-lg col-md-12">

				<div class="navbar-brand">
					<a href="../index.php">
						<img src="../images/img-template/main-logo.png" alt="logo">
					</a>
				</div>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#slide-navbar-collapse" aria-controls="slide-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"><i class="icon icon-navicon"></i></span>
				</button>

				<div class="navbar-collapse collapse" id="slide-navbar-collapse">
					<ul class="navbar-nav list-inline text-uppercase">
						<li class="nav-item text-hover"><a href="../index.php" class="nav-link" data-effect="Home">Inicio</a></li>
						<li class="nav-item text-hover"><a href="./shop.php" class="nav-link" data-effect="Shop">Tienda</a></li>
						<li class="nav-item text-hover"><a href="./about.php" class="nav-link" data-effect="About Us">Sobre nosotros</a></li>
						<li class="nav-item text-hover active"><a href="./contact.php" class="nav-link" data-effect="Contact">Contáctanos</a></li>

						<li class="nav-item dropdown">
							<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle">Páginas</a>
							<ul class="dropdown-menu">
								<li><a href="./blog.php" class="dropdown-item">Blog</a></li>
								<li><a href="./single-post.php" class="dropdown-item">Post simple</a></li>
								<li><a href="./single-product.php" class="dropdown-item">Producto simple</a></li>
							</ul>
						</li>

					</ul>
					<div class="d-flex justify-content-end align-items-center">
						<div class="searchbar">
							<a href="#" class="search-button search-toggle" data-selector=".navbar">
								<i class="icon icon-search"></i>
							</a>
							<form role="search" method="get" class="search-box" action="">
								<input class="search-field text search-input text-dark" placeholder="Buscar" type="search">
							</form>
						</div>
					<div class="mr-3">|</div>
					<div class="shopping-cart">
						<a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
							<i class="icon icon-shopping-cart"></i>
						</a>
						<?php if (isset($_SESSION["user"])) {
							echo '<sub class="carrito">'.$elementos_carrito[0].'</sub>';
						}
						?>
					</div>
				</nav>
			</div>		
		</div>

	</header>

<div class="site-banner">
	<div class="banner-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">			
					<div class="text-content colored">
						<h1>Contact Us</h1>
						<div class="breadcum-items">
							<span class="item color-primary"><a href="../index.php">Home /</a></span>
							<span class="item colored">Contact Us</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="contact-information padding-large mt-3">
	<div class="container">
		<div class="row">
				<div class="col-md-6 p-0 mb-3">
					<div class="container">
					<h2>Get in Touch</h2>

				<div class="contact-detail d-flex flex-wrap mt-4">
					<div class="detail mr-6 mb-4">
						<h3>Phones</h3>
						<ul class="list-unstyled">
							<li><i class="icon icon-phone"></i>+1650-243-0000</li>
							<li><i class="icon icon-phone"></i>+1650-243-0000</li>
						</ul>
					</div>
					<div class="detail mb-4">
						<h3>Emails</h3>
						<ul class="list-unstyled">
							<li><i class="icon icon-envelope-o"></i>
								<a href="mailto:info@bakery.com">info@bakery.com</a></li>
							<li><i class="icon icon-envelope-o"></i>
								<a href="mailto:info@bakery.com">info@bakery.com</a></li>
						</ul>
					</div>
					<div class="address detail mb-4">
						<h3>Address</h3>
						<ul class="list-unstyled">
							<li><i class="icon icon-map-marker"></i>
								North Melbourne VIC 3051, Australia</li>
							<li><i class="icon icon-map-marker"></i>
								North Melbourne VIC 3051, Australia</li>
						</ul>
					</div>					
					<div class="detail mb-4">
						<h3>Social Links</h3>
						<div class="social-links flex-container">
							<a href="#" class="icon icon-facebook"></a>
							<a href="#" class="icon icon-twitter"></a>
							<a href="#" class="icon icon-pinterest-p"></a>
							<a href="#" class="icon icon-youtube"></a>
							<a href="#" class="icon icon-linkedin"></a>
						</div>
					</div>

				</div>
				</div>
			</div>

			<div class="col-md-6 p-0">
				<div class="container">
					<div class="row">
						<div class="contact-information col-md-12">
						<h2>Send A Message</h2>
							<form name="contactform" action="contact.php" method="post" class="contact-form d-flex flex-wrap mt-4">
								<div class="text-input flex-container">
								<input type="text" name="name" placeholder="Name" class="name mr-3 mb-3">
								<input type="text" name="email" placeholder="E-mail" class="mb-3">
								</div>
								<textarea name="message" placeholder="Message" style="height: 150px;"></textarea>
								<button type="submit" name="submit">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="google-map">
	<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://getasearch.com/fmovies"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
</section>

<?php include "./parts/footer-views.php";?>
