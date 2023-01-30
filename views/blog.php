<?php include "./parts/header-views.php";?>

	<header id="header">
		<div class="container">
			<div class="row">

			<nav class="navbar navbar-expand-lg col-md-12">

				<div class="navbar-brand">
					<a href="../index.php">
						<img src="../../images/img-template/main-logo.png" alt="logo">
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
						<a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
							<i class="icon icon-shopping-cart"></i>
						</a>
						<?php if (isset($_SESSION["user"])) {
							echo '<sub class="carrito">'.$elementos_carrito[0].'</sub>';
						}
						?>
					</div>
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
						<h1>Blogs</h1>
						<div class="breadcum-items mt-2">
							<span class="item color-primary"><a href="../index.php">Home /</a></span>
							<span class="item colored">Blogs</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="post-grid margin-large border-bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-4 mb-5">
				<a href="single-post.html">
					<img src="../images/img-template/blog-cake.jpg" alt="blog" class="postImg mb-3">
				</a>
				<div class="content">
					<div class="meta-tags flex-container color-secondary mb-3">
						<span class="border-right"><i class="icon icon-calendar mr-2"></i>April 21,18</span>
						<span class="border-right"><i class="icon icon-bubble mr-2"></i>0 Comments</span>
						<span><i class="icon icon-envelope-o mr-2"></i>News</span>
					</div>

					<h2 class="post-title"><a href="single-post.html">How to Make a Cake with Great Delicious Chocolate</a></h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>

					<div class="pix_btn">
						<a href="single-post.html" class="btn-hvr-effects mt-3">read more</a>
					</div>

				</div>
			</div>

			<div class="col-md-4 mb-5">
				<a href="single-post.html">
					<img src="../images/img-template/postImg2.jpg" alt="blog" class="postImg mb-3">
				</a>
				<div class="content">
					<div class="meta-tags flex-container color-secondary mb-3">
						<span class="border-right"><i class="icon icon-calendar mr-2"></i>April 21,18</span>
						<span class="border-right"><i class="icon icon-bubble mr-2"></i>0 Comments</span>
						<span><i class="icon icon-envelope-o mr-2"></i>News</span>
					</div>

					<h2 class="post-title"><a href="single-post.html">How to Make a Cake with Great Delicious Chocolate</a></h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>

					<div class="pix_btn">
						<a href="single-post.html" class="btn-hvr-effects mt-3">read more</a>
					</div>
				
				</div>
			</div>

			<div class="col-md-4 mb-5">
				<a href="single-post.html">
					<img src="../images/img-template/postitem1.jpg" alt="blog" class="postImg mb-3">
				</a>
				<div class="content">
					<div class="meta-tags flex-container color-secondary mb-3">
						<span class="border-right"><i class="icon icon-calendar mr-2"></i>April 21,18</span>
						<span class="border-right"><i class="icon icon-bubble mr-2"></i>0 Comments</span>
						<span><i class="icon icon-envelope-o mr-2"></i>News</span>
					</div>

					<h2 class="post-title"><a href="single-post.html">How to Make a Cake with Great Delicious Chocolate</a></h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>

					<div class="pix_btn">
						<a href="single-post.html" class="btn-hvr-effects mt-3">read more</a>
					</div>
				
				</div>
			</div>

			<div class="col-md-4 mb-5">
				<a href="single-post.html">
					<img src="../images/img-template/tabimg.jpg" alt="blog" class="postImg mb-3">
				</a>
				<div class="content">
					<div class="meta-tags flex-container color-secondary mb-3">
						<span class="border-right"><i class="icon icon-calendar mr-2"></i>April 21,18</span>
						<span class="border-right"><i class="icon icon-bubble mr-2"></i>0 Comments</span>
						<span><i class="icon icon-envelope-o mr-2"></i>News</span>
					</div>

					<h2 class="post-title"><a href="single-post.html">How to Make a Cake with Great Delicious Chocolate</a></h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>

					<div class="pix_btn">
						<a href="single-post.html" class="btn-hvr-effects mt-3">read more</a>
					</div>
				
				</div>
			</div>

			<div class="col-md-4 mb-5">
				<a href="single-post.html">
					<img src="../images/img-template/postitem.jpg" alt="blog" class="postImg mb-3">
				</a>
				<div class="content">
					<div class="meta-tags flex-container color-secondary mb-3">
						<span class="border-right"><i class="icon icon-calendar mr-2"></i>April 21,18</span>
						<span class="border-right"><i class="icon icon-bubble mr-2"></i>0 Comments</span>
						<span><i class="icon icon-envelope-o mr-2"></i>News</span>
					</div>

					<h2 class="post-title"><a href="single-post.html">How to Make a Cake with Great Delicious Chocolate</a></h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>

					<div class="pix_btn">
						<a href="single-post.html" class="btn-hvr-effects mt-3">read more</a>
					</div>
				
				</div>
			</div>

			<div class="col-md-4 mb-5">
				<a href="single-post.html">
					<img src="../images/img-template/postimg2.jpg" alt="blog" class="postImg mb-3">
				</a>
				<div class="content">
					<div class="meta-tags flex-container color-secondary mb-3">
						<span class="border-right"><i class="icon icon-calendar mr-2"></i>April 21,18</span>
						<span class="border-right"><i class="icon icon-bubble mr-2"></i>0 Comments</span>
						<span><i class="icon icon-envelope-o mr-2"></i>News</span>
					</div>

					<h2 class="post-title"><a href="single-post.html">How to Make a Cake with Delicious Chocolate</a></h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>

					<div class="pix_btn">
						<a href="single-post.html" class="btn-hvr-effects mt-3">read more</a>
					</div>
				
				</div>
			</div>			

		</div>
	</div>
</section>

<?php include "./parts/footer-views.php";?>	
