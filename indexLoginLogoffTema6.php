<?php

/**
 * @author Borja Nuñez Refoyo
 * @version 2.0
 * @since 17/04/2024
 */
// Incluyo la configuracion de la app y BD
require_once 'config/confAPP.php';
require_once 'config/confDBPDO.php';

//Recupero la sesión
session_start();

// Comprueba si hay una pagina activa
if (!isset($_SESSION['paginaActiva'])) {
    //Asigna como pagina activa inicioPublico
    $_SESSION['paginaActiva'] = 'inicioPublico';
}
// Carga la pagina en curso
require_once $controller[$_SESSION['paginaActiva']];