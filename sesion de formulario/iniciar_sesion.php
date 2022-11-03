<?php

sesión_inicio();

include_once  '../valeria_colores/conexion.php' ;

$usuario_login = $_POST [ ' nombre_usuario ' ];
$contrasena_login = $_POST [ 'contrasena' ];

echo  '<pre>' ;
var_dump( $usuario_login );
var_dump( $contrasena_login );
echo  '</pre>' ;


$sql = 'SELECT * FROM usuarios WHERE nombre = ?' ;
$sentencia = $pdo -> preparar ( $sql );
$sentencia -> ejecutar ( array ( $usuario_login ));
$resultado = $sentencia -> buscar ();

echo  '<pre>' ;
var_dump( $resultado );
echo  '</pre>' ;

si ( !$resultado ){
    echo  'No salir usuario' ;
    morir();
}

echo  '<pre>' ;
var_dump( $resultado [ 'contrasena' ]);
eco  '</pre>' ;

if (contraseña_verificar( $contrasena_login , $resultado [ 'contrasena' ]) ){
    $_SESSION [ 'admin' ] = $usuario_login ;
    header( 'Ubicación: restringido.php' );

} más {
    echo  '¡No son iguales las contraseñas!' ;
    morir();
}