<?php

sesión_inicio();

if ( isset ( $_SESSION [ 'admin' ]) ){
    echo  '¡Bienvenido! ' . $_SESION [ 'administrador' ];
    echo  '<br><a href="cerrar.php">Cerrar Sesión</a>' ;
} más {
    encabezado ( 'Ubicación: registro.php' );
}