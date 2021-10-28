<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=PT+Sans+Narrow:wght@400;700&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/77d2a7d160.js" crossorigin="anonymous"></script>

    <meta name="theme-color" content="#fafafa">
</head>

<body>
    <div class="error hidden">
        <p>
            No pudimos encontrar una cuenta que coincida con el correo electrónico y la contraseña que ingresó. Compruebe su correo electrónico y contraseña e inténtelo de nuevo.
        </p>
    </div>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="login-container">
            <div class="title-login">
                <h1>Iniciar Sesión</h1>
                <p>Bienvenido, por favor ingrese su cuenta</p>
            </div>
            <div class="content-login login-form">
                <form method="POST" action="controller/login.php">
                    <div class="field">
                        <label for="f_email">Usuario</label>
                        <input type="email" id="f_email" name="f_email" required="off" autocomplete="">
                    </div>
                    <div class="field">
                        <label for="f_contrasena">Contraseña</label>
                        <input type="password" id="f_contrasena" name="f_contrasena" required="off" autocomplete="">
                    </div>
                    <div class="btn-recover">
                        <span>¿Olvido la contraseña?</span>
                    </div>
                    <div class="btn-login d-flex justify-content-center">
                        <input type="submit" class="btn btn-enviar" value="Ingresar">
                    </div>
                </form>
            </div>
            <div class="content-login login-recover hidden">
                <form method="POST" action="controller/login.php">
                    <div class="field">
                        <label for="r_email">Cuenta de correo</label>
                        <input type="text" id="r_email" name="r_email" required="off" autocomplete="">
                    </div>
                    <div class="btn-form">
                        <span>Volver al login</span>
                    </div>
                    <div class="btn-login">
                        <input type="submit" class="btn btn-enviar" value="Recuperar contraseña">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>