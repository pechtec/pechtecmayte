<?php

sesión_inicio();


$_SESION = matriz ();


if (ini_get(" sesión.use_cookies ")) {
    $parámetros = session_get_cookie_params();
    setcookie(nombre_sesión(), '' , hora() - 42000 ,
        $parámetros [" ruta "], $parámetros [" dominio "],
        $parámetros [" seguro "], $parámetros [" httponly "]
    );
}


session_destroy();

encabezado ( 'Ubicación: registro.php' );
?>