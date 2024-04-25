<?php

/**
 * @author Borja Nuñez Refoyo
 * @version 2.0
 * @since 19/04/2024
 */
interface DB {

    //Ejecuta las sentencias SQL recibidas
    public static function ejecutaConsulta($sentenciaSQL, $parametros = null);
}

