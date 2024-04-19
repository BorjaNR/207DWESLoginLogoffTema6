<?php
/**
 * @author Borja Nuñez Refoyo
 * @version 2.0
 * @since 18/04/2024
 */
?>
<div class="row mb-5">
    <div class="col text-center">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="webroot/images/ArbolAPP.PNG" class="img-fluid" alt="Mapeo de la Aplicación">
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                    <img src="webroot/images/FicherosAPP.PNG" class="img-fluid" alt="Archivos de la Aplicación">
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                    <img src="webroot/images/UmlAPP.PNG" class="img-fluid" alt="Archivos de la Aplicación">
                </div>
            </div>
        </div>
    </div>
</div>
<form class="position-absolute top-0 end-0" style="margin-top: 60px; margin-right: 15px" method="post">
    <input class="btn btn-primary" name="login" type="submit" value="Login">
</form>
<form class="position-absolute top-0 start-0" method="post">
    <button type="submit" name="espanol" class="btn btn-secundary">
        <img src="webroot/images/español.png" alt="es" width="40" height="40">
    </button>
    <button type="submit" name="ingles" class="btn btn-secundary">
        <img src="webroot/images/ingles.png" alt="en" width="40" height="40"">
    </button>
    <button type="submit" name="portugues" class="btn btn-secundary">
        <img src="webroot/images/portugues.png" alt="pt" width="40" height="40">
    </button>
</form>

