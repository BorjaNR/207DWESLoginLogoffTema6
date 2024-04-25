<?php
/**
 * @author Borja Nuñez Refoyo
 * @version 2.0 
 * @since 24/04/2024
 */

// Si pulsa salir manda a el usuario a la pagina anterior
if (isset($_REQUEST['volver'])) {
    // Asigna a la página en curso la página anterior
    $_SESSION['paginaActiva'] = $_SESSION['paginaAnterior'];
    // Cierra la sesión de error
    unset($_SESSION['error']);
    header('Location: indexLoginLogoffTema6.php');
    exit;
}

$avError = [
    'error' => $_SESSION['error']->getCodError(),
    'descripcion' => $_SESSION['error']->getDescError(),
    'archivo' => $_SESSION['error']->getArchivoError(),
    'linea' => $_SESSION['error']->getLineaError() 
];
require_once $view['layout'];

