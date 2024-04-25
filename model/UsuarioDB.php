<?php

/**
 * @author Borja Nueñez Refoyo
 * @version 2.0
 * @since 19/01/2024
 */
interface UsuarioDB {

    // Validar las credenciales del usuario
    public static function validarUsuario($codUsuario, $password);
}

