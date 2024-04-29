<?php

/**
 * @author Borja Nuñez Refoyo
 * @version 2.0 
 * @since 19/04/2024
 */
//Si se intenta acceder a la pagina sin iniciar sesion redirige a la pagina de inicio de la aplicación
if (empty($_SESSION['user207DWESLoginLogout'])) {
    $_SESSION['paginaAnterior'] = $_SESSION['paginaActiva'];
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
    $_SESSION['paginaAnterior'] = $_SESSION['paginaActiva'];
    $_SESSION['paginaActiva'] = 'detalle';
    header('Location: indexLoginLogoffTema6.php');
    exit();
}

// Ir a Wip
if (isset($_REQUEST['mto_departamentos'])) {
    $_SESSION['paginaAnterior'] = $_SESSION['paginaActiva'];
    $_SESSION['paginaActiva'] = 'wip';
    header('Location: indexLoginLogoffTema6.php');
    exit();
}

// Ir a Error
if (isset($_REQUEST['error'])) {
    $consulta = "SELECT * FROM T03_Administracion";
    DBPDO::ejecutaConsulta($consulta);
    exit();
}

// Meter el mensaje en un array
$avInicioPrivado = [
    'descUsuario' =>  $_SESSION['user207DWESLoginLogout']->getdescUsuario(),
    'numConexiones' => $_SESSION['user207DWESLoginLogout']->getnumAcceso(),
    'ultimaConexionAnterior' => $avInicioPrivado['ultimaConexionAnterior'] = $_SESSION['user207DWESLoginLogout']->getfechaHoraUltimaConexionAnterior()
];

require_once $view['layout'];
