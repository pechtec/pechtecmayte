<?php

$enlace = 'mysql:host=localhost;dbname=api' ;
$usuario = 'raíz' ;


prueba {

    $pdo = nuevo  PDO ( $enlace , $usuario ,);

    //echo 'Conectado';

} captura ( PDOException  $e ) {
    imprimir " ¡Error!: ". $e -> obtener Mensaje () . " <br/> ";
    morir();
}