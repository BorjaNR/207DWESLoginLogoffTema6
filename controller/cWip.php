<?php
/**
 * @author Borja Nuñez Refoyo
 * @version 2.0 
 * @since 24/04/2024
 */

//Si le da al boton volver vuelve a la pagina de inicio privado
if (isset($_REQUEST['volver'])) {
    // Redirige a la página de inicio
    $_SESSION['paginaActiva'] = $_SESSION['paginaAnterior'];
    header('Location: indexLoginLogoffTema6.php'); 
    exit();
}
require_once $view['layout'];

