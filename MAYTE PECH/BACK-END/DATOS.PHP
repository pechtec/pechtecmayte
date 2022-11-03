<?php


encabezado ( 'Tipo de contenido: aplicación/json' );
encabezado(" Acceso-Control-Permitir-Origen: * ");


if ( $_GET [ 'moneda' ]== 'euro' || $_GET [ 'moneda' ]= 'dólar' ){

    include_once  'conexión.php' ;

    $sql = 'SELECCIONAR * DESDE' . $_GET [ 'moneda' ];
     $sentencia = $pdo -> preparar ( $sql );
    $sentencia -> ejecutar ();
    $datos = $sentencia -> fetchAll ();


} más {
    echo  'Solicitud no encontrada' ;
}

echo json_encode( $datos );