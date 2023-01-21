<?php 
	session_start();
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

    <link rel="stylesheet" type="text/css" href="../fonts/icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" href="../css/slick.css" />
    <link rel="stylesheet" type="text/css" href="../css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="../css/magnific-popup.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">

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
								<span class='pr-50'><i class='icon icon-phone'></i>".$_SESSION["user"]["phone"]."</span>
								<span class='color-secondary'><i class='icon icon-envelope-o'></i><a href='#'>".$_SESSION["user"]["email"]."</a></span>
							</div>";
						} else {
							echo "<div class='contact-block'>
								<span class='pr-50'><i class='icon icon-phone'></i>Teléfono</span>
								<span class='color-secondary'><i class='icon icon-envelope-o'></i><a href='#'>Email</a></span>
							</div>";
						}
					?>

                        <div class="header-top-right">
                            <ul class="list-unstyled d-flex color-secondary">
                            <?php if (isset($_SESSION["user"])) {
                                echo "<li class='pr-50'><a href='./views/../login-register.php?logout'>Desconectar</a></li>";
                            } else {
                                echo "<li class='pr-50'><a href='./views/../login-register.php'>Login/Register</a></li>";
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
