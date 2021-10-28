<?php
    // require_once('../../login/controlador/login.php');
    $name="Michael Torres";
?>

<header class="main-header">
    <div class="header-logo">
        <a href="../view/index.php" class="logo">KAS</a>
    </div>
    <div class="navegacion">
        <div class="nav-movil" id="nav-movil">
            <i class="fas fa-bars"></i>
        </div>
        <div class="nav-usuario">
            <ul>
                <li>
                    <div class="nav-usuario-logo">
                        <i class="fas fa-user"></i>
                        <span>
                            <?php echo $name;?>
                        </span>
                        <i class="fas fa-caret-down"></i>
                    </div>
                    <ul class="user-menu" id="user-menu">
                        <li>
                            <div class="nav-usuario-sign-out">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Cerrar sesion</span>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>