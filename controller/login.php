<?php
    require_once('../model/login.php');
    $login = new login();
    $id = $login->getId();
    $name = $login->getName();

    if($_POST) {
        $email = $_POST['f_email'];
        $contrasena = $_POST['f_contrasena'];

        if($login->login($email, $contrasena)) {
            header('Location: ../view/index.php');
        }else{
            header('Location: ../../index.php');
        }
    }else {
        if($id == ''){
            header('Location: ../../index.php');
        }
    }
?>