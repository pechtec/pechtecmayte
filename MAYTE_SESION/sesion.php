<?php
sesión_inicio();
$inicio de sesión = 'VALOR' ;

$_SESSION [ 'admin' ]= $ inicio de sesión ;

if (isset( $ _SESSION [ 'admin' ])){
    encabezado ( 'ubicación: index.php' );
}

//eco '<br>';
//var_dump($_SESION);