<?php
    require_once('../model/product.php');

    $product = new product();

    $PID = $_GET['id'];

    $product->delete($PID);
?>