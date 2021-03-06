<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=PT+Sans+Narrow:wght@400;700&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/77d2a7d160.js" crossorigin="anonymous"></script>

    <meta name="theme-color" content="#fafafa">
</head>

<body>
    <?php
        include_once '../templates/header.php';
    ?>
        <main>
            <?php
                include_once '../templates/aside.php'
            ?>
            <div class="content">
                <div class="container padding20 b-box">
                    <div class="bread-crumbs padding10">
                        <a href="../view/index.php">Inicio</a>/
                        <a href="../view/index.php">Productos</a>/
                        <span>Agregar producto</span>
                    </div>
                    <form method="POST" action="../controller/addProduct.php">
                        <div class="container-form-prods">
                            <div class="test">
                                <div class="field">
                                    <label for="p_title">Titulo</label>
                                    <input type="text" id="p_title" name="p_title" required="off" autocomplete="">
                                </div>
                                <div class="field">
                                    <label for="p_description">Descripci??n</label>
                                    <input type="text" id="p_description" name="p_description" required="off" autocomplete="">
                                </div>
                                <div class="field">
                                    <label for="p_content">Contenido</label>
                                    <textarea type="email" id="p_content" name="p_content" required="off" autocomplete=""></textarea>
                                </div>
                            </div>
                            <div class="test">
                                <div class="field">
                                    <label for="p_cost">Costo</label>
                                    <input type="text" id="p_cost" name="p_cost" required="off" autocomplete=""></input>
                                </div>
                                <div class="field">
                                    <label for="p_price">Precio</label>
                                    <input type="text" id="p_price" name="p_price" required="off" autocomplete=""></input>
                                </div>
                                <div class="field">
                                    <label for="p_price_reseller">Precio revendedor</label>
                                    <input type="text" id="p_price_reseller" name="p_price_reseller" required="off" autocomplete=""></input>
                                </div>
                                <div class="field">
                                    <label for="p_price_wholesaler">Precio mayorista</label>
                                    <input type="text" id="p_price_wholesaler" name="p_price_wholesaler" required="off" autocomplete=""></input>
                                </div>
                                <div class="field">
                                    <label for="p_visible">Visibilidad</label>
                                    <input type="text" id="p_visible" name="p_visible" required="off" autocomplete=""></input>
                                </div>
                            </div>
                        </div>
                        <div class="btn-login d-flex justify-content-center">
                            <input type="submit" class="btn btn-enviar" value="Guardar">
                        </div>
                    </form>
                </div>
                <?php
                    include_once '../templates/footer.php'
                ?>
            </div>
        </main>

        <script src="../js/jquery-3.5.1.min.js"></script>
        <script src="../js/vendor/modernizr-3.11.2.min.js"></script>
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga = function() {
                ga.q.push(arguments)
            };
            ga.q = [];
            ga.l = +new Date;
            ga('create', 'UA-XXXXX-Y', 'auto');
            ga('set', 'anonymizeIp', true);
            ga('set', 'transport', 'beacon');
            ga('send', 'pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>