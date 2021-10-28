<?php
    require_once('../model/product.php');
    $product = new product();

    if($_POST) {
        $p_title = $_POST['p_title'];
        $p_description = $_POST['p_description'];
        $p_content = $_POST['p_content'];
        $p_cost = $_POST['p_cost'];
        $p_price = $_POST['p_price'];
        $p_price_reseller = $_POST['p_price_reseller'];
        $p_price_wholesaler = $_POST['p_price_wholesaler'];

        // if($login->login($email, $contrasena)) {
        //     header('Location: ../view/index.php');
        // }else{
        //     header('Location: ../../index.html');
        // }

        $product->add($p_title, $p_description, $p_content, $p_cost, $p_price, $p_price_reseller, $p_price_wholesaler);
    }
?>