<?php
    require_once('../model/product.php');
    $product = new product();

    $products = $product->get();
?>