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
					<div class="text-content text-center">
						<span><i class="icon icon-calendar mr-2"></i>April 21,18</span>
						<h2>How to Make a Cake with Great Delicious Chocolate</h2>
						
						<div class="breadcum-items mt-2">
							<span class="item color-primary"><a href="index.html">Home /</a></span>
							<span class="item color-primary"><a href="index.html">Blogs /</a></span>
							<span class="item colored">How to Make a Cake with Great Delicious Chocolate</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--site-banner-->


<div class="content-area margin-large border-bottom">
	<div class="container">
		<div class="row">

		<main class="main-content col-md-9">
			<div class="post-detail mb-5">
					<a href="#">
						<img src="images/blog-post.jpg" alt="blog" class="mb-3">
					</a>
					<div class="post-content text-hover">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>
						<blockquote>This is blockquote consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</blockquote>

						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>
						
					</div><!--post-content-->
				</div><!--post-detail-->

		<section class="comments-wrap mb-4">
			<h3>Comments</h3>
			<div class="comment-list mt-4">

				<article class="flex-container d-flex mb-3">
					<img src="images/default.png" alt="default" class="commentorImg">
					<div class="author-post">
						<div class="comment-meta d-flex">
							<h4>Michael Watson</h4>
							<span class="meta-date">Dec 2,2020</span>
							<small class="comments-reply"><a href="#"><i class="icon icon-mail-reply"></i>Reply</a></small>
						</div><!--meta-tags-->

						<p>Tristique tempis condimentum diam done ullancomroer sit element henddg sit he consequert.Tristique tempis condimentum diam done ullancomroer sit element henddg sit he consequert.</p>
					</div>

				</article><!--flex-container-->

			<div class="child-comments">
				<article class="flex-container d-flex">
					<img src="images/default.png" alt="sara" class="commentorImg">
					<div class="author-post">
						<div class="comment-meta d-flex">
							<h4>Chris Gyale</h4>
							<span class="meta-date">Dec 3,2020</span>
							<small class="comments-reply"><a href="#"><i class="icon icon-mail-reply"></i>Reply</a></small>
						</div><!--meta-tags-->

						<p>Lorem diam done ullancomroer sit element henddg sit he consequert.Tristique tempis condimentum diam done ullancomroer sit element henddg sit he consequert.</p>
					</div>

				</article><!--flex-container-->
			</div><!--child-comments-->

			</div><!--comment-list-->

		</section>

		<section class="comment-respond  mb-5">			
			<h3>Leave a Comment</h3>
			<form method="post" class="form-group mt-3">
				<textarea id="comment" class="form-control mb-4" name="comment" placeholder="Write your comment here"></textarea>
				<div class="comment-form">
					<input type="text" name="author" id="author" class="form-control mb-4 mr-4"  placeholder="Your full name">
					<input type="email" name="email" id="email" class="form-control mb-4"  placeholder="E-mail Address">
				</div>
				<div class="checkbox-btn d-flex">
				 <input class="checkbox-custom" name="checkbox" type="checkbox"><p>Save my name, email, and website in this browser for the next time I comment.</p>
				 </div>
				 <div class="pix_btn mt-2">
					<a href="#" class="btn-hvr-effects">Submit</a>
				</div>
			</form>
		</section>

		</main>

			<aside class="right-sidebar col-md-3">
				<div class="container">
				<div class="row">

				<div class="meta-person bg-alabaster p-4 text-center">
					<img src="images/ceo.jpg" alt="person" class="personImg">
					<h3 class="colored mt-3">Head Chef</h3>
					<p>He is a Experience, Amazing and Best Chef in our Restaurant.</p>
				</div>

				<div class="sidebar-box">
					<h3>Search</h3>
					<div class="search-box d-flex">
						<input type="text" name="search" class="border" class="mt-3">
						<a href="#" class="btn-search btn-hvr-effects"><i class="icon icon-search"></i></a>
					</div><!--search-box-->
				</div>

				<div class="categories-box sidebar-box">
					<h3>Categories</h3>
					<ul class="list-unstyled mt-3">
						<li><a href="#">Recipes</a><span>(5)</span></li>
						<li><a href="#">Asian</a><span>(3)</span></li>
						<li><a href="#">Italian</a><span>(4)</span></li>
						<li><a href="#">Cooking</a><span>(2)</span></li>
						<li><a href="#">World Restaurants</a><span>(3)</span></li>
					</ul>		
				</div><!--.categories-box-->

			<div class="recent-post-box sidebar-box">
				<h3>Recent Posts</h3>
				<div class="d-flex mb-3 mt-3">
					<div class="post-image">
						<img src="images/cake-item1.jpg" class="rpImg">
					</div>
					<div class="text-block">
					<a href="#">2 Storey Cake Tricks And Tips</a>
					<span class="date">
						july 2nd 2020
					</span>
					</div>

				</div>

				<div class="d-flex mb-3">
					<div class="post-image">
						<img src="images/cake-item1.jpg" class="rpImg">
					</div>
					<div class="text-block">
					<a href="#">Special Chocolate Rolls</a>
					<span class="date">
						july 20th 2020
					</span>
					</div>

				</div>

				<div class="d-flex mb-3">
					<div class="post-image">
						<img src="images/cake-item1.jpg" class="rpImg">
					</div>
					<div class="text-block">
					<a href="#">Fullfill the Cupcakes Standard</a>
					<span class="date">
						july 30th 2020
					</span>
					</div>

				</div>

		</div><!--.recent-post-box-->

		<div class="post-tags-box sidebar-box">
			<h3>Tags</h3>
			<div class="tags">
				<a href="#">Breads,</a>
				<a href="#">Cakes,</a>
				<a href="#">Chocolate,</a>
				<a href="#">Rolls,</a>
				<a href="#">Pastries,</a>
				<a href="#">Cupcakes,</a>
				<a href="#">Donuts</a>
			</div>
		</div><!--.tags-box-->

			</div><!--container-->
			</div>
		</aside>

		</div>
	</div>
</div><!--content-area-->


<footer id="footer">
	<div class="container">
		<div class="row">

			<div class="wrap flex-container">

			<div class="col-md-3 footer-logo text-center mb-3">
				<img src="../images/img-template/main-logo.png" class="mb-3">
				<p>Cambiar logo y cambiar este texto</p>
			</div>		

			<div class="col-md-5 mr-5 mb-3">
				<div class="widget-newsletter mb-5">
					<h4 class="widget-title">Suscribete para estar actualizado</h4>
					<div class="newsletter-button d-flex">
						<input type="text" name="Subscribe" placeholder="Tu email">
						<button class="btn-hvr-effects">Suscribirse</button>
					</div>
					
				</div><!--widget-newsletter-->

				<div class="working-schedule">
					<h4 class="widget-title">Horario</h4>
					<div class="time-list d-flex">
						<ul class="list-unstyled mr-5">
							<li>Lunes - Viernes</li>
							<li>8:00am - 8:30 pm</li>
						</ul>
						<ul class="list-unstyled">
							<li>Sábados - Domingos</li>
							<li>10:00am - 16:00 pm</li>
						</ul>
					</div>
				</div>
			</div><!--col-md-4-->

			<div class="col-md-2">
				<div class="quick-links">
					<h4 class="widget-title">Enlaces</h4>
					<div class="footer-menu">
						<ul class="list-unstyled">
							<li><a href="../index.php">Inicio</a></li>
							<li><a href="./shop.php">Tienda</a></li>
							<li><a href="./about.php">Sobre nosotros</a></li>
							<li><a href="./blog.php">Blogs</a></li>
							<li><a href="./contact.php">Contáctanos</a></li>
						</ul>
					</div>
				</div>
			</div>

			</div><!--content-->

		</div>
	</div>
</footer>


<div class="footer-bottom">
	<div class="container">
		<div class="wrap flex-container padding-small">
			<div class="copyright">
				<p class="mb-0">© 2023 Tienda online by Javi</p>
			</div>
			<div class="payment-card">
				<span>Aceptamos:</span>
				<img src="../images/img-template/visa.png" class="cardImg">
				<img src="../images/img-template/american-express.png" class="cardImg">
				<img src="../images/img-template/master-card.png" class="cardImg">
			</div>
		</div>
	</div>
</div>

</div>    	

<?php include "./parts/footer-views.php";?>
