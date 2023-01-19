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
        <img src="../images/img-template/main-logo.png" alt="logo">
    </div>
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1 d-flex flex-column justify-content-center">
                <h3>Regístrate</h3>
                <form action="../index.php" method="post">
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
                <form action="../index.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="login-user" placeholder="Usuario" value="" />
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