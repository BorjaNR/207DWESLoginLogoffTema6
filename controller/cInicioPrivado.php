<?php

/**
 * @author Borja Nuñez Refoyo
 * @version 2.0 
 * @since 19/04/2024
 */
//Si se intenta acceder a la pagina sin iniciar sesion redirige a la pagina de inicio de la aplicación
if (empty($_SESSION['user207DWESLoginLogout'])) {
    // Redirige a la página de inicio
    $_SESSION['paginaActiva'] = 'inicioPublico';
    header('Location: indexLoginLogoffTema6.php');
    exit();
}
// Cerrar sesión al hacer clic en el botón
if (isset($_REQUEST['cerrar_sesion'])) {
    session_destroy(); // Destruye la sesión
    header('Location: indexLoginLogoffTema6.php'); // Redirige a la página de inicio de sesión
    exit();
}

// Ir a detalle al pulsar el boton
if (isset($_REQUEST['detalle'])) {
    $_SESSION['paginaActiva'] = 'detalle';
    header('Location: indexLoginLogoffTema6.php');
    exit();
}

$bienvenida = "Bienvenido, {$_SESSION['user207DWESLoginLogout']->getdescUsuario()}.<br>";
$numConexiones = "Esta es tu {$_SESSION['user207DWESLoginLogout']->getnumAcceso()} vez conectándote.<br>";
if ($_SESSION['user207DWESLoginLogout']->getnumAcceso() == 1) {
    $ultimaConexion = "Esta es la primera vez que te conectas";
} else {
    $ultimaConexion = "Te conectaste por última vez {$_SESSION['user207DWESLoginLogout']->getfechaHoraUltimaConexionAnterior()}.";
}

// Meter el mensaje en un array
$aInicioPrivado = [
    'bienvenida' => $bienvenida,
    'numConexiones' => $numConexiones,
    'ultimaConexion' => $ultimaConexion
];

require_once $view['layout'];
