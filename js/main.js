// (function(validarNavLaterMovil) {
//     const elemNavLater = document.getElementById('main-sidebar');
//     if (screen.width < 780) {
//         elemNavLater.setAttribute('class', `hidden`);
//         // alert("menor a 780");
//     } else {
//         elemNavLater.setAttribute('class', `main-sidebar`);
//         // alert("mayor a 780");
//     }
// })();

// function mostrarNavegacionLateral() {
//     const elemNavLater = document.getElementById('main-sidebar');
//     const clase = elemNavLater.className;
//     let clases = clase.split(' ');
//     if (clases.length == 1) {
//         elemNavLater.setAttribute('class', `main-sidebar visible`);
//     } else {
//         elemNavLater.setAttribute('class', `main-sidebar`);
//     }
// };


// function mostrarNavegacionSignOut() {
//     const elemento = document.getElementById('user-menu');
//     const clase = elemento.className;
//     let clases = clase.split(' ');
//     if (clases.length == 1) {
//         elemento.setAttribute('class', `user-menu visible`);
//     } else {
//         elemento.setAttribute('class', `user-menu`);
//     }
// };

(function() {
    "use strict"

    //mostrar Sub-menus de navegación+
    $('.contenido-navegacion-int').hide(); +

    $('.contendido-navegacion').on('click', mostrarSubMenusNavegacion);
    $('.nav-usuario-logo').on('click', mostrarNavegacionSignOut);
    $('#nav-movil').on('click', mostrarNavegacionLateral);
    $('.bienvenida-principal i').on('click', function() {
        $('.bienvenida-principal').slideUp(1000);
        $('.bienvenida-principal').remove();
    })

    function mostrarNavegacionLateral() {

        if ($(this).hasClass('activo')) {
            $('#main-sidebar').slideUp(500);
            $(this).removeClass('activo');
        } else {
            $(this).addClass('activo');
            $('#main-sidebar').slideDown(500);
        }
    }

    function mostrarNavegacionSignOut() {
        if ($(this).hasClass('activo')) {
            // La clase activo me dira si el menu se encuentra desplegado o no
            $('#user-menu').slideUp(1000);
            // Si tiene la clase elevo el contenedor con 1s de demora
            $(this).removeClass('activo');
            // Remuevo la clase 'activo' para indicar que mi desplegable ya NO ESTA visible
        } else {
            $('#user-menu').slideDown(1000);
            // Si no tiene la clase bajo o dejo visible el contenedor con 1s de demora
            $(this).addClass('activo');
            // Agrego la clase 'activo' para indicar que mi desplegable ahora ESTA visible
        }
    }

    function mostrarSubMenusNavegacion() {
        let contenedorHijo = $(this).parent().children();
        // Cuando de click busco el contenedor padre para asi tener ambos hijos (contenido-navegacion-int)
        if ($(this).hasClass('activo')) {
            // La clase activo me dira si hay un sub-menu abierto o desplegado
            $(this).removeClass('activo');
            // Si hay alguna clase de 'activo' procedo a eliminarla
            $(contenedorHijo[1]).slideUp(700);
            // Subo el sub-menu
        } else {
            if (contenedorHijo.length > 1) {
                // Si el contenedor padre tiene solo 1 hijo no hara este proceso, si tiene mas de uno (contenido-navegacion-int) lo hara
                $('.contendido-navegacion').removeClass('activo');
                // Limpio todas los contenedores para evitar que quede alguna con dicha clase
                $(this).addClass('activo');
                // Agrego la clase activo
                $('.contenido-navegacion-int').slideUp();
                // Escondo los sub-menus con slideUp que da la sensación de que lo hace lentamente
                $(contenedorHijo[1]).slideDown(700);
                // Al elemento hijo del que le di click lo mostrare con una transicion de .5s hacia abajo
            }
        }
    }
})();