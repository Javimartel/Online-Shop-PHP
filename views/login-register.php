<?php 
    // Inicializamos la session
    session_start();

    if(isset($_GET["logout"])) {
        session_destroy();
    }

    // Realizamos las funciones correspondientes al Registro
    if (isset($_POST['register'])) {
        $resultado = [
            'error' => false,
            'mensaje' => 'El usuario ' . $_POST["register-nick"] . ' ya existe'
        ];
        $config = include "../config/config.php";
        try {
            $dsn = 'mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'];
            $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
            $consultaSQL = "SELECT nick FROM usuarios";
            $sentencia = $conexion->prepare($consultaSQL);
            $sentencia->execute();
            $usuarios = $sentencia->fetchAll();
            
            foreach ($usuarios as $nicks) {
                if ($_POST["register-nick"] === $nicks[0]) {
                    $resultado['error'] = true;
                    goto end;
                }
            }

            $usuario = [
                "nick" => $_POST["register-nick"],
                "password" => $_POST["register-password"],
                "email" => $_POST["register-email"],
                "phone" => $_POST["register-phone"]
            ];
            $consultaSQL = "INSERT INTO usuarios (nick, password, email, phone)";
            $consultaSQL .= "VALUES (:" . implode(", :", array_keys($usuario)) . ")";
            $sentencia = $conexion->prepare($consultaSQL);
            $sentencia->execute($usuario);
            $_SESSION["user"]["nick"] = $usuario["nick"];
            $_SESSION["user"]["password"] = $usuario["password"];
            $_SESSION["user"]["email"] = $usuario["email"];
            $_SESSION["user"]["phone"] = $usuario["phone"];
            $_SESSION["user"]["admin"] = 0;
            
?>
<?php
    if (isset($resultado) && $resultado["error"] === true) {
        end:
?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <?= $resultado['mensaje'] ?>
                </div>
            </div>
        </div>
    </div>
<?php
    // Muestra el error y vuelve al html
    goto html;
    } else {
?>
		<script type="text/javascript">
			window.location.href = "../index.php";
		</script>
<?php
	}
        } catch (PDOException $error) {
            $resultado['error'] = true;
            $resultado['mensaje'] = $error->getMessage();
            goto end;
        }
    }
?>

<?php 
    // Realizamos las funciones correspondientes al login
    if (isset($_POST['login'])) {
        $resultado = [
            'error' => false,
            'mensaje' => 'El usuario ' . $_POST["login-nick"] . ' no existe'
        ];
        $config = include "../config/config.php";
        try {
            $dsn = 'mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'];
            $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
            $consultaSQL = "SELECT nick, password, email, phone, admin FROM usuarios";
            $sentencia = $conexion->prepare($consultaSQL);
            $sentencia->execute();
            $usuarios = $sentencia->fetchAll();
            
            foreach ($usuarios as $data) {
                if ($_POST["login-nick"] === $data[0]) {
                    if ($_POST["login-password"] === $data[1]) {
                        $_SESSION["user"]["nick"] = $_POST["login-nick"];
                        $_SESSION["user"]["password"] = $_POST["login-password"];
                        $_SESSION["user"]["email"] = $data[2];
                        $_SESSION["user"]["phone"] = $data[3];
                        $_SESSION["user"]["admin"] = $data[4];
                    } else {
                        $resultado['error'] = true;
                        $resultado['mensaje'] = "La contraseña para " . $_POST["login-nick"] . " es incorrecta";
                        goto end;
                    }
                ?>

                    <script type="text/javascript">
                        window.location.href = "../index.php";
                    </script>
                <?php
                }
            }

            $resultado['error'] = true;
            goto end;


        } catch (PDOException $error) {
            $resultado['error'] = true;
            $resultado['mensaje'] = $error->getMessage();
            goto end;
        }
    }
    html:   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javi - Login / Register</title>
    <link rel="stylesheet" href="../css/login-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="d-flex justify-content-center align-center mt-5">
        <a href="../index.php">
            <img src="../images/img-template/main-logo.png" alt="logo">
        </a>
    </div>
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1 d-flex flex-column justify-content-center">
                <h3>Regístrate</h3>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="register-nick" placeholder="Usuario" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="register-password" placeholder="Contraseña" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="register-confirm-pw" placeholder="Repite la contraseña" value="" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="register-email" placeholder="Email" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="register-phone" placeholder="Teléfono" value="" />
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <input type="submit" class="btnSubmit" name="register" value="Regístrate"/>
                    </div>
                </form>
            </div>

            <div class="col-md-6 login-form-2">
                <h3>Acceso</h3>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="login-nick" placeholder="Usuario" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="login-password" placeholder="Contraseña" value="" />
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <input type="submit" class="btnSubmit" name="login" value="Acceder"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>