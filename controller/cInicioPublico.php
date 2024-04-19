<?php
/**
 * @author Borja Nuñez Refoyo
 * @version 2.0
 * @since 18/04/2024
 */

// Si la cookie de idioma no está establecida, la creamos por defecto como español
if (!isset($_COOKIE['idioma'])) {
    setcookie("idioma", "es", time() + 86400);
}

// Comprobamos si pulsa el botón login
if (isset($_REQUEST['login'])) {
    $_SESSION['paginaActiva'] = 'login';
    header('Location: indexLoginLogoffTema6.php');
    exit();
}

// Comprobamos si se ha pulsado un botón para cambiar el idioma
if (isset($_REQUEST['espanol'])) {
    // Cambiamos la cookie al idioma seleccionado y refrescamos la página
    setcookie("idioma", "es", time() + 86400);
    header('Location: indexLoginLogoffTema6.php');
    exit();
} elseif (isset($_REQUEST['ingles'])) {
    // Cambiamos la cookie al idioma seleccionado y refrescamos la página
    setcookie("idioma", "en", time() + 86400);
    header('Location: indexLoginLogoffTema6.php');
    exit();
} elseif (isset($_REQUEST['portugues'])) {
    // Cambiamos la cookie al idioma seleccionado y refrescamos la página
    setcookie("idioma", "pt", time() + 86400);
    header('Location: indexLoginLogoffTema6.php');
    exit();
}

require_once $view['layout'];
