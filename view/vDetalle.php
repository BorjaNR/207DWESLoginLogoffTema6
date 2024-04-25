<form class="position-absolute top-0 end-0" style="margin-top: 85px; margin-right: 15px" name="fomrulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input class="btn btn-primary" name="volver" type="submit" value="Volver">
</form>
<?php
//Mostramos la variable $_SESSION
if (isset($_SESSION)) {
    echo '<br><br><h2>Variable <b>$_SESSION</b></h2>';
    foreach ($_SESSION as $key => $value) {
        if ($key === 'user207DWESLoginLogout') {
            print_r("<b>$key</b>:" . $value->getDescUsuario()."<br>");
        } else {
            echo "<b>$key</b>: $value<br>";
        }
    }
} else {
    echo '<h2>La variable <b>$_SESSION</b> no está definida</h2>';
}

//Mostramos la variable $_COOKIE
echo '<h3>Variable $_COOKIE</h3>';
foreach ($_COOKIE as $key => $value) {
    echo "<span class=\"fw-bolder\">$key:</span> $value<br>";
}

//Mostramos la variable $_SERVER
echo '<h3>Variable $_SERVER</h3>';
foreach ($_SERVER as $key => $value) {
    echo "<span class=\"fw-bolder\">$key:</span> $value<br>";
}

//Mostramos la variable $_GET
echo '<h3>Variable $_GET</h3>';
foreach ($_GET as $key => $value) {
    echo "<span class=\"fw-bolder\">$key:</span> $value<br>";
}

//Mostramos la variable $_POST
echo '<h3>Variable $_POST</h3>';
foreach ($_POST as $key => $value) {
    echo "<span class=\"fw-bolder\">$key:</span> $value<br>";
}

//Mostramos la variable $_REQUEST
echo '<h3>Variable $_REQUEST</h3>';
foreach ($_REQUEST as $key => $value) {
    echo "<span class=\"fw-bolder\">$key:</span> $value<br>";
}

//Mostramos la variable $_FILES
echo '<h3>Variable $_FILES</h3>';
foreach ($_FILES as $key => $value) {
    echo "<span class=\"fw-bolder\">$key:</span> $value<br>";
}

//Mostramos la variable $_ENV
echo '<h3>Variable $_ENV</h3>';
foreach ($_ENV as $key => $value) {
    echo "<span class=\"fw-bolder\">$key:</span> $value<br>";
}

//Mostramos la variable $_GLOBALS
echo '<h3>Variable $GLOBALS</h3>';
foreach ($GLOBALS as $value) {
    var_dump($value);
    echo ("<br>");
}
phpinfo();


