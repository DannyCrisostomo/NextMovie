<?php include("./src/includes/backend/registrar datos login.php")?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/estilos/recuperar.css" />
    <link rel="stylesheet" href="./assets/css/media/recuperar.css" />
    <link rel="icon" href="../assets/img/source/logo.png"  sizes="32x32" />
    <title>Registrar | NextMovie</title>
</head>

<body>
    <header class="contenedor">
        <?php isset($alert) ? $alert : ''; ?>
    </div>
        <div class="fondo">
            <div class="logo">
                <p>Next<span>Movie</span></p>
            </div>
            <div class="login">
                <div class="login-form">
                    <span>Recuperar</span>
                    <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                    <form action="" method="post" autocomplete="off">
                        <input type="email" placeholder="Email" name="correo" class="input" required="">
                        <div class="submit">
                            <input type="submit" value="Enviar Solicitud" class="boton">
                        </div>
                        <?php isset($alert) ? $alert : ''; ?>
                    </form>
                    <div class="recuerdame">
                        <div class="ayuda">
                            <a href="registrar.php" class="">Registrar Cuenta</a>
                        </div>
                        <div class="check">
                            <a href="index.php" class="">Iniciar Sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script src="./js/logeo.js"></script>
</body>
</html>