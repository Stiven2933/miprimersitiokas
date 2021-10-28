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
                <?php require_once('../controller/viewProducts.php'); ?>
                <div class="container padding20 b-box">
                    <div class="bread-crumbs padding10">
                        <a href="../view/index.php">Inicio</a>/
                        <a href="../view/index.php">Productos</a>/
                        <span>Ver productos</span>
                    </div>
                    <div class="container-table padding20">
                        <table id="tabla" class="table-responsive mAuto" style="table-layout:fixed" border="1">
                            <thead>
                                <tr>
                                    <td>Imagen</td>
                                    <td>Titulo</td>
                                    <td>Costo</td>
                                    <td>Precio</td>
                                    <td>Visibilidad</td>
                                    <td>Acciones</td>
                                </tr>
                            <thead>
                            <tbody>
                                <?php
                                for($j = 0; $j < count($products); $j++){?>
                                    <tr>
                                        <td></td>
                                        <td><?php echo $products[$j]['title']; ?></td>
                                        <td><?php echo $products[$j]['cost']; ?></td>
                                        <td><?php echo $products[$j]['price']; ?></td>
                                        <td><?php echo $products[$j]['visible']; ?></td>
                                        <td>
                                            <a href="../view/editProduct.php?id=<?php echo $products[$j]['pid']; ?>"><i class="far fa-edit faactions" title="Edit" aria-hidden="true"></i></a>
                                            <a href="../view/deleteProduct.php?id=<?php echo $products[$j]['pid']; ?>"><i class="far fa-trash-alt faactions delete_btn" title="Delete" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                    </div>
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