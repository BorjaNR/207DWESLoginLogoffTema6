<?php
/**
 * @author Borja Nuñez Refoyo
 * @version 2.0 
 * @since 19/04/2024
 */

//Muestro los mensajes

echo '<p>'.$aInicioPrivado['bienvenida'];
echo $aInicioPrivado['numConexiones'];
echo ''. $aInicioPrivado['ultimaConexion'] .'</p>';
?>
<img src="webroot/images/ArbolAPP.PNG" alt="Mapeo de la Aplicación">
<form class="position-absolute top-0 end-0" style="margin-top: 85px; margin-right: 15px" method="post" action="">
    <input class="btn btn-primary d-block"" type="submit" name="cerrar_sesion" value="Cerrar Sesión">
    <input class="btn btn-primary d-block" style="margin-top: 10px" type="submit" name="detalle" value="Detalle">
    <input class="btn btn-primary d-block" style="margin-top: 10px" type="submit" name="mto_departamentos" value="Mto. Departamentos">
</form>   
