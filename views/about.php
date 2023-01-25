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
						<li class="nav-item text-hover active"><a href="./about.php" class="nav-link" data-effect="About Us">Sobre nosotros</a></li>
						<li class="nav-item text-hover"><a href="./contact.php" class="nav-link" data-effect="Contact">Contáctanos</a></li>
						<!-- <li class="nav-item text-hover"><a href="./blog.php" class="nav-link" data-effect="Blogs">Blog</a></li> -->

						<li class="nav-item dropdown">
							<a href="#" data-bs-toggle="dropdown" aria-expanded="false" class="nav-link dropdown-toggle">Páginas</a>
							<ul class="dropdown-menu">
								<li><a href="./blog.php" class="dropdown-item">Blog</a></li>
								<li><a href="./single-post.php" class="dropdown-item">Post simple</a></li>
								<li><a href="./single-product.php" class="dropdown-item">Producto simple</a></li>
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
							<input class="search-field text search-input" placeholder="Search" type="search">
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

<div class="site-banner">
	<div class="banner-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">			
					<div class="colored">
						<h1>About Us</h1>
						<div class="breadcum-items">
							<span class="item"><a href="../index.php">Home /</a></span>
							<span class="item colored">About Us</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--site-banner-->

<section class="chief-detail padding-large">
	<div class="container">
		<div class="row">
				<div class="single-image col-md-6">
					<img src="../images/img-template/ceo.jpg" alt="ceo" class="singleImg">
				</div>
				<div class="col-md-6 p-5 text-center align-self-center">
					<h2 class="section-title text-center mb-3">Mr X- CEO</h2>
					<p>Mr X is a Friendly, Hardworker and Good Person. Consectetur adipisit slit, sed do eisusmod tempor incididiunt ut labore et dolare manag aliqua. Ut enim ad ut labore et.</p>
				</div>
		</div>
	</div>
</section>

<section class="our-team bg-sand padding-large">
	<h2 class="section-title text-center mb-4">Our Team</h2>
	<div class="container">
		<div class="row">

				<div class="col-md-3">

					<div class="team-member text-center">
						
						<figure>
							<a href="#"><img src="../images/img-template/team.jpg" alt="post" class="member-image"></a>
						</figure>

						<div class="member-details text-center">
							<h4>Mrs. Nocole Sara</h4>
							<div class="designation colored">CEO-Founder</div>
							<p>Jelly topping halvah caramels sweet cake gumni nears gumni coffee.</p>
							<div class="social-links color-primary ">
								<a href="#" class="icon icon-facebook pr-10"></a>
								<a href="#" class="icon icon-twitter pr-10"></a>
								<a href="#" class="icon icon-pinterest-p"></a>
							</div>
						</div>

					</div>

				</div><!--col-md-3-->

				<div class="col-md-3 text-center">

					<div class="team-member text-center">
						<figure>
							<img src="../images/img-template/team1.jpg" alt="post" class="member-image">
						</figure>
						<div class="member-details text-center">
							<h4>Ms Sienna Jolie</h4>
							<div class="designation colored">General Manager</div>
							<p>Jelly topping halvah caramels sweet cake gumni nears gumni coffee.</p>
							<div class="social-links color-primary">
								<a href="#" class="icon icon-facebook pr-10"></a>
								<a href="#" class="icon icon-twitter pr-10"></a>
								<a href="#" class="icon icon-pinterest-p"></a>
							</div>
						</div><!--text-content-->
					</div>

				</div><!--col-md-3-->

				<div class="col-md-3 text-center">

					<div class="team-member text-center">
						<figure>
							<img src="../images/img-template/team2.jpg" alt="post" class="member-image">
						</figure>
						<div class="member-details text-center">
							<h4>Ms Jenny Blacksmith</h4>
							<div class="designation colored">Assistant Manager</div>
							<p>Jelly topping halvah caramels sweet cake gumni nears gumni coffee.</p>
							<div class="social-links color-primary">
								<a href="#" class="icon icon-facebook pr-10"></a>
								<a href="#" class="icon icon-twitter pr-10"></a>
								<a href="#" class="icon icon-pinterest-p"></a>
							</div>
						</div><!--text-content-->
					</div>

				</div><!--col-md-3-->

				<div class="col-md-3 text-center">

					<div class="team-member text-center">
						<figure>
							<img src="../images/img-template/team3.jpg" alt="post" class="member-image">
						</figure>
						<div class="member-details text-center">
							<h4>Mrs Lora Inn</h4>
							<div class="designation colored">Staff</div>
							<p>Jelly topping halvah caramels sweet cake gumni nears gumni coffee.</p>
							<div class="social-links color-primary">
								<a href="#" class="icon icon-facebook pr-10"></a>
								<a href="#" class="icon icon-twitter pr-10"></a>
								<a href="#" class="icon icon-pinterest-p"></a>
							</div>
						</div><!--text-content-->
					</div>

				</div><!--col-md-3-->

		</div>
	</div>
</section>

<section class="our-targets padding-large">
	<div class="container">
		<h2 class="section-title text-center mb-5">Our Targets</h2>
		<div class="row">
			<img src="../images/img-template/flower-bg.jpg" alt="flower">

			<div class="accordion accordion-flush mt-3" id="target-accordion">
			<div class="accordion-item">
				<div class="accordion-header">
					<h4 class="accordion-title">
						<a role="button" data-bs-toggle="collapse" data-bs-target="#target0" class="" aria-expanded="true">Providing Quality Products For All to be happy and peace</a>
					</h4>
				</div>
				<div id="target0" class="accordion-collapse collapse show" aria-expanded="true" >
					<div class="accordion-body"> 
						<div class="target-detail">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
						</div>
				</div>
				</div>
			</div><!--panel-->

			<div class="accordion-item">
				<div class="accordion-header">
					<h4 class="accordion-title">
						<a role="button" data-bs-toggle="collapse" data-bs-target="#target1" class="" aria-expanded="true">Best Quality Products For All to be happy and peace</a>
					</h4>
				</div>
				<div id="target1" class="accordion-collapse collapse" aria-expanded="true" >
					<div class="accordion-body"> 
						<div class="target-detail">
						<p>Providing Quality Products For All to be happy and peace.Providing Quality Products For All to be happy and peace</p>
						</div>
				</div>
				</div>
			</div><!--panel-->

			<div class="accordion-item">
				<div class="accordion-header">
					<h4 class="accordion-title">
						<a role="button" data-bs-toggle="collapse" data-bs-target="#target2" class="" aria-expanded="true">Providing Quality Products For All to be happy and peace</a>
					</h4>
				</div>
				<div id="target2" class="accordion-collapse collapse" aria-expanded="true" >
					<div class="accordion-body"> 
						<div class="target-detail">
						<p>Providing Quality Products For All to be happy and peace.Providing Quality Products For All to be happy and peace</p>
						</div>
				</div>
				</div>
			</div><!--panel-->

		</div><!--panel-group-->

		</div>
	</div>
</section>

<section class="our-achivement bg-sand padding-large">
	<div class="container">
			<h2 class="section-title text-center mb-5">Our Best Moments</h2>

		<div class="row">

			<div class="achivement-block text-center col-md-4">
				<img src="../images/img-template/badge.png" alt="badge">
				<div class="mt-3">
					<h3>Bakery of the Month</h3>
					<span class="date">2018 - 2020</span>
					<p>Bakery is a free HTML CSS Template by Templates Jungle specially crafted for Bakeries.</p>
				</div>
			</div><!--achivement-block-->
			<div class="achivement-block text-center col-md-4">
				<img src="../images/img-template/badge1.png" alt="badge">
				<div class="mt-3">
					<h3>Bakery of the Month</h3>
					<span class="date">2018 - 2020</span>
					<p>Bakery is a free HTML CSS Template by Templates Jungle specially crafted for Bakeries.</p>
				</div>
			</div><!--achivement-block-->
			<div class="achivement-block text-center col-md-4">
				<img src="../images/img-template/badge2.png" alt="badge">
				<div class="mt-3">
					<h3>Bakery of the Month</h3>
					<span class="date">2018 - 2020</span>
					<p>Bakery is a free HTML CSS Template by Templates Jungle specially crafted for Bakeries.</p>
				</div>
			</div><!--achivement-block-->

		</div>
	</div>
</section>

<?php include "./parts/footer-views.php";?>
