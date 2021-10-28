<?php
    require_once('../model/product.php');

    $product = new product();

    $id = $_GET['id'];
    $productValues = $product->getByID($id);

    if($_POST) {
        $PID = $_POST['p_id'];
        $p_title = $_POST['p_title'];
        $p_description = $_POST['p_description'];
        $p_content = $_POST['p_content'];
        $p_cost = $_POST['p_cost'];
        $p_price = $_POST['p_price'];
        $p_price_reseller = $_POST['p_price_reseller'];
        $p_price_wholesaler = $_POST['p_price_wholesaler'];

        $product->update($p_title, $p_description, $p_content, $p_cost, $p_price, $p_price_reseller, $p_price_wholesaler, $PID);
    }
?>