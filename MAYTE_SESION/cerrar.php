<?php
// Inicializar la sesión.
// Si está usando session_name("algo"), ¡no lo olvide ahora!
sesión_inicio();

// Destruir todas las variables de sesión.
$_SESION = matriz ();

// Si se desea destruir la sesión completamente, borre también la cookie de sesión.
// Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
if (ini_get(" sesión.use_cookies ")) {
    $parámetros = session_get_cookie_params();
    setcookie(nombre_sesión(), '' , hora() - 42000 ,
        $parámetros [" ruta "], $parámetros [" dominio "],
        $parámetros [" seguro "], $parámetros [" httponly "]
    );
}

// Finalmente, destruir la sesión.
session_destroy();

encabezado ( 'ubicación: index.php' );
?>