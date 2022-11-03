<?php
prueba {
    $pdo = new  PDO ( 'mysql:host=localhost;dbname=paginacion_2' , 'root' , '' );
    //echo 'conectado';

} captura ( PDOException  $e ) {
    imprimir " ¡Error!: ". $e -> obtener Mensaje () . " <br/> ";
    morir();
}
?>