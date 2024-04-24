<?php
/**
 * @author Borja Nuñez Refoyo
 * @version 2.0 
 * @since 24/04/2024
 */
//Si se intenta acceder a la pagina sin iniciar sesion redirige a la pagina de inicio de la aplicación
if (empty($_SESSION['user207DWESLoginLogout'])) {
    // Redirige a la página de inicio
    $_SESSION['paginaActiva'] = 'inicioPublico';
    header('Location: indexLoginLogoffTema6.php');
    exit();
}
//Si le da al boton volver vuelve a la pagina de inicio privado
if (isset($_REQUEST['volver'])) {
    // Redirige a la página de inicio
    $_SESSION['paginaActiva'] = 'inicioPrivado';
    header('Location: indexLoginLogoffTema6.php'); 
    exit();
}
require_once $view['layout'];

