<?php include "./parts/header-views.php";?>

<?php
	if (isset($_POST["insert"])) {
		$config = include "../config/config.php";
		try {
			$dsn = 'mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'];
			$conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
			$producto = [
				"name" => $_POST["insert-name"],
				"price" => $_POST["insert-price"],
				"description" => $_POST["insert-description"],
				"image" => "../images/new-img/".$_POST["insert-image"]
			];
			$consultaSQL = "INSERT INTO productos (name, price, description, image)";
			$consultaSQL .= "VALUES (:" . implode(", :", array_keys($producto)) . ")";
			$sentencia = $conexion->prepare($consultaSQL);
            $sentencia->execute($producto);
	
		} catch (PDOException $error) {}
	}

	if (isset($_POST["add-product"]) && isset($_SESSION["user"])) {
		$config = include "../config/config.php";
		try {
			$dsn = 'mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'];
			$conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

			// Coger el ID del usuario que está conectado
			$consultaSQL = 'SELECT id_user FROM usuarios WHERE nick = "'.$_SESSION["user"]["nick"].'"';
			$sentencia = $conexion->prepare($consultaSQL);
			$sentencia->execute();
			$id_user = $sentencia->fetchAll();

			// Añadir producto al carrito con el id del usuario
			$consultaSQL = "INSERT INTO carrito (id_user, id_product)";
			$consultaSQL .= "VALUES (" . $id_user[0][0] .", ". $_POST["id-product"] . ")";
			$sentencia = $conexion->prepare($consultaSQL);
            $sentencia->execute();

		} catch (PDOException $error) {}
	}

	if(isset($_SESSION["user"])) {
		$config = include "../config/config.php";
		try {
			$dsn = 'mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'];
			$conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

			// Coger el ID del usuario que está conectado
			$consultaSQL = 'SELECT id_user FROM usuarios WHERE nick = "'.$_SESSION["user"]["nick"].'"';
			$sentencia = $conexion->prepare($consultaSQL);
			$sentencia->execute();
			$id_user = $sentencia->fetchAll();

			// Consultar número de elementos en el carrito
			$consultaSQL = 'SELECT COUNT(*) FROM carrito WHERE id_user = "'.$id_user[0][0].'"';
			$sentencia = $conexion->prepare($consultaSQL);
            $sentencia->execute();
			$elementos_carrito = $sentencia->fetch();

			// Consultar todos los productos del carrito
			$consultaSQL = 'SELECT productos.id_product, productos.name, productos.price, productos.description, productos.image, carrito.purchase_date 
							FROM productos INNER JOIN carrito
							ON productos.id_product = carrito.id_product
							INNER JOIN usuarios
							ON usuarios.id_user = carrito.id_user WHERE carrito.id_user = "'.$id_user[0][0].'"';
			$sentencia = $conexion->prepare($consultaSQL);
            $sentencia->execute();
			$productos_carrito = $sentencia->fetchAll();

		} catch (PDOException $error) {}
	}

?>

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
						<li class="nav-item text-hover active"><a href="./shop.php" class="nav-link" data-effect="Shop">Tienda</a></li>
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
						<a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
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

	<?php if (isset($_SESSION["user"])) {
			echo '<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
				<div class="offcanvas-header d-flex align-items-start">
					<h5 id="offcanvasRightLabel">Productos del Carrito</h5>
					<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">X</button>
				</div>';
			if ($elementos_carrito[0] == 0) {
				echo '<div class="offcanvas-body">
					Actualmente no hay productos en el carrito</div>';
			} else {
				foreach ($productos_carrito as $data) {
					echo '<div class="m-3 d-flex align-items-center justify-content-between">';
					echo "<img style='width:100px;height:100px;object-fit:cover;border-radius:20%' src='".$data[4]."'></a>
						<div class='ml-1 d-flex flex-column align-items-center'>
						<h5 class='pt-4'><a href='#'>".$data[1]."</a></h5>
						<span class='price colored'>$".$data[2]."</span>
						</div>
						<input type='hidden' name='id-product' value='".$data[0]."'>
						<input type='hidden' name='purchase_date' value='".$data[5]."'>
						<button type='button' class='btn btn-danger'>X</button></div>";
				}
			}
			echo '</div>';			
		}
	?>


<div class="site-banner">
	<div class="banner-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">			
					<div class="colored">
						<h1>Shop</h1>
						<div class="breadcum-items">
							<span class="item"><a href="../index.php">Home /</a></span>
							<span class="item colored">Shop</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--site-banner-->

<section class="our-team bg-sand padding-large">
	<div class="container">
		<div class="row">

			<?php
				$config = include "../config/config.php";
				try {
					$dsn = 'mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'];
					$conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
					$consultaSQL = "SELECT id_product, name, price, description, image FROM productos";
					$sentencia = $conexion->prepare($consultaSQL);
					$sentencia->execute();
					$productos = $sentencia->fetchAll();
					
					foreach ($productos as $data) {
						echo "<div class='product-item col-md-3 pb-4'>
								<a href='#' data-bs-toggle='modal' data-bs-target='#modal-producto-".$data[0]."' class='product-image'><img style='width:265px;height:303.8px;object-fit:cover;' src='".$data[4]."'></a>
								<div class='text-comtent text-center'>
									<h5 class='pt-4'><a href='#'>".$data[1]."</a></h5>
									<p>".$data[3]."</p>
									<span class='price colored'>$".$data[2]."</span>
								</div>
							</div>";
						echo '<div class="modal fade" id="modal-producto-'.$data[0].'" tabindex="-1" aria-labelledby="modal-producto-'.$data[0].'1" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="modal-producto-'.$data[0].'1">Añadir producto</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
										</div>
										<div class="modal-body">
											<form id="form-producto-'.$data[0].'" action="#" method="post">
												<div class="form-group mb-2 d-flex flex-column align-items-center">';
						if (!isset($_SESSION["user"])) {
							echo '<div class="alert alert-danger" role="alert" style="text-align-last: center">
								Tienes que <a href="./login-register.php" class="alert-link"><u>INICIAR SESIÓN</u></a> para poder añadir productos al carrito
							</div>';
						}
						echo '<h3>'.$data[1].'</h3>
												<p>'.$data[3].'</p>
												<span class="price colored">$'.$data[2].'</span>
												<input type="hidden" name="id-product" value="'.$data[0].'">
											</div>';
						if (isset($_SESSION["user"])) {
							echo '<div class="form-group d-flex justify-content-center"><button type="submit" class="btn btn-primary m-2" name="add-product" data-bs-dismiss="modal">Añadir al carrito</button>';
						} else {
							echo '<div class="form-group d-flex justify-content-center"><button type="submit" class="btn btn-primary m-2" data-bs-dismiss="modal" disabled>Añadir al carrito</button>';
						}
						echo '<button type="button" class="btn btn-secondary m-2" data-bs-dismiss="modal">Cancelar</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>';
					}
					
					if (isset($_SESSION["user"]) && $_SESSION["user"]["admin"]) {
						echo '<div class="product-item col-md-3 pb-4">
							<a href="#" data-bs-toggle="modal" data-bs-target="#modal-insertar">
							<div class="d-flex flex-column justify-content-center align-items-center" style="width:265px;height:303.8px;">
							<svg class="d-flex align-center" xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
								<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
								<path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
							  </svg>
							</div></a></div>';

						// Modal Insertar 
						echo '<div class="modal fade" id="modal-insertar" tabindex="-1" aria-labelledby="modal-insertar1" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="modal-insertar1">Insertar producto</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
										</div>
										<div class="modal-body">
											<form id="form-insertar" action="#" method="post">
												<div class="form-group mb-2">
													<label for="insert-name m-2">Inserta un nombre</label>
													<input type="text" class="form-control" name="insert-name">
												</div>
												<div class="form-group mb-2">
													<label for="insert-price">Inserta un precio</label>
													<input type="number" class="form-control" name="insert-price">
												</div>
												<div class="form-group mb-2">
													<label for="insert-description">Inserta una descripción</label>
													<input type="text" name="insert-description" class="form-control">
												</div>
												<div class="form-group mb-2">
													<label for="insert-image">Adjunta una imagen</label>
													<input style="background: white !important; color: black; border: 1px solid rgb(207, 207, 207)" type="file" name="insert-image" class="form-control">
												</div>
												<div class="form-group">
													<button type="submit" class="btn btn-primary" name="insert" data-bs-dismiss="modal">Insertar</button>
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
												</div>
												</form>
										</div>
									</div>
								</div>
							</div>';
					}
		
		
				} catch (PDOException $error) {}
			?>

				<!-- <div class="product-item col-md-3 pb-4">
					<a href="./single-product.php" class="product-image"><img src="../images/img-template/cake-item1.jpg"></a>
					<div class="text-comtent text-center">
						<h5 class="pt-4"><a href="./single-product.php">Black Forest Pastry</a></h5>
						<p>Cake - Pastries</p>
						<span class="price colored">$12</span>
					</div>
				</div>
				<div class="product-item col-md-3 pb-4">
					<a href="./single-product.php" class="product-image"><img src="../images/img-template/cake-item2.jpg"></a>
					<div class="text-comtent text-center">
						<h5 class="pt-4"><a href="./single-product.php">Sprinkled Donuts</a></h5>
						<p>Cake - Pastries</p>
						<span class="price colored">$12</span>
					</div>
				</div>
				<div class="product-item col-md-3 pb-4">
					<a href="./single-product.php" class="product-image"><img src="../images/img-template/cake-item3.jpg"></a>
					<div class="text-comtent text-center">
						<h5 class="pt-4"><a href="./single-product.php">Black Forest Cupcake</a></h5>
						<p>Cake - Pastries</p>
						<span class="price colored">$12</span>
					</div>
				</div>
				<div class="product-item col-md-3 pb-4">
					<a href="./single-product.php" class="product-image"><img src="../images/img-template/cake-item4.jpg"></a>
				    <div class="text-comtent text-center">
						<h5 class="pt-4"><a href="./single-product.php">Macarons with Berries</a></h5>
						<p>Cake - Pastries</p>
						<span class="price colored">$12</span>
					</div>
				</div -->
				

		</div>
	</div>
</section>

<?php include "./parts/footer-views.php";?>
