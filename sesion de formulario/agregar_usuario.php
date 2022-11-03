<?php

include_once  '../valeria_colores/conexion.php' ;

//echo password_hash("valeria", CONTRASEÑA_DEFAULT)."\n";

$usuario_nuevo = $_POST [ 'nombre_usuario' ];
$contrasena = $_POST [ 'contrasena' ];
$contrasena2 = $_POST [ 'contrasena2' ];


$sql = 'SELECT * FROM usuarios WHERE nombre = ?' ;
$sentencia = $pdo -> preparar ( $sql );
$sentencia -> ejecutar ( array ( $usuario_nuevo ));
$resultado = $sentencia -> buscar ();

var_dump( $resultado );


si ( $resultado ){
    echo  '</br>Existe este usuario' ;
    morir();
}

$contrasena = password_hash( $contrasena , $PASSWORD_DEFAULT );

echo  '<pre>' ;
var_dump(  $usuario_nuevo );
var_dump( $contrasena );
var_dump( $contrasena2 );
eco  '</pre>' ;

//VERIFICAR CONTRASEÑA
if (contraseña_verificar( $contrasena2 , $contrasena )) {
    echo  '¡La contraseña es válida!<br>' ;

    //AGREGAR A LA BASE DE DATOS
    $sql_agregar = 'INSERTAR EN usuarios (nombre,contrasena) VALORES (?,?)' ;
    $sentencia_agregar = $pdo -> preparar ( $sql_agregar );

    if ( $sentencia_agregar -> ejecutar ( array ( $usuario_nuevo ,  $contrasena )) ){
        echo  'Agregado<br>' ;
    } más {
        echo  'Error<br>' ;
    }

    //cerramos conexion base de datos y sentencia
    $sentencia_agregar = null ;
    $pdo = nulo ;
    //encabezado('ubicación:index.php');


} más {
    echo  'La contraseña no es válida.' ;
}