<?php
sesión_inicio();

if (isset( $ _SESSION [ 'admin' ])){
    echo  'BIENVENIDA' . $ _SESION [ 'administrador' ];
    echo  '<br><a href="cerrar.php">cerrar sesión</a>' ;
} más {
    encabezado ( 'ubicación: index.php' );
}

?>

<!DOCTYPE html >
<html  lang =" es " >
<cabeza >
    <juego de caracteres meta  =" UTF-8 " >
    <meta  http-equiv =" X-UA-Compatible " content =" IE=edge " >
    <meta  name =" viewport " content =" ancho=ancho-del-dispositivo, escala-inicial=1.0 " >
    <título > Documento </título >
</cabeza >
<cuerpo >
    <h1 > ¿QUE TAL TU DIA? </h1 >
</cuerpo >
</html >