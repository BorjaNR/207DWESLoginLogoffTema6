<?php

/**
 * @author Borja Nueñez Refoyo
 * @version 2.0
 * @since 19/01/2024
 */
class DBPDO implements DB {

    public static function ejecutaConsulta($sentenciaSQL, $parametros = null) {
        try {
            // Instanciamos un objeto PDO y establecemos la conexión
            $miDB = new PDO(DSN, USERNAME, PASSWORD);
            // Prepara la consulta
            $consultaPreparada = $miDB->prepare($sentenciaSQL);
            // EjecuresultadoConsultata la consulta
            $consultaPreparada->execute($parametros);
            // Devuelvo el resultado de la consulta
            return $consultaPreparada;
            // Código que se ejecuta si hay algún error
        } catch (PDOException $excepcion) {
            $_SESSION['paginaAnterior'] = $_SESSION['paginaActiva'];
            $_SESSION['paginaActiva'] = 'error';
            $_SESSION['error'] = new ErrorApp($excepcion->getCode(), $excepcion->getMessage(), $excepcion->getFile(), $excepcion->getLine());
            header('Location:indexLoginLogoffTema6.php');
            exit;
        } finally {
            // Cierra la conexión con la BD
            unset($miDB);
        }
    }
}