<?php 

include_once  'conexión.php' ;

$sql = 'SELECT* FROM articulos' ;
$sentencia = $pdo -> preparar ( $sql );
$sentencia -> ejecutar ();

$resultado = $sentencia -> fetchAll ();

//var_dump ($resultado);

$articulos_x_pagina = 3 ;

$total_articulos_bd = $sentencia- > rowCount ();
//echo $total_articulos_bd;
$paginas = $total_articulos_bd / 3 ;
$paginas = techo( $paginas );
//echo $paginas;

?>

<!doctype html >
<html lang =" es " >
  <cabeza >
    <!-- Metaetiquetas requeridas -->
    <juego de caracteres meta  =" utf-8 " >
    <meta  name =" viewport " content =" ancho=ancho-del-dispositivo, escala-inicial=1, reducción-para-ajustar=no " >

    <!-- Bootstrap CSS -->
    <enlace  rel =" hoja de estilo " href =" https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css " integridad =" sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO " crossorigin =" anonimo " >

    <título > ¡Hola, mundo! </título >
  </cabeza >
  <cuerpo >

    <div  class =" contenedor my-5 " >
    <h1  class =" mb-5 " > paginacion </h1 >

    <?php 
    si (!$_GET ){
        encabezado( 'ubicación:index.php?pagina=1' );
    }
    if ( $ _GET [ 'pagina' ]> $paginas || $_GET [ 'pagina' ]<= 0 ){
        encabezado( 'ubicación:index.php?pagina=1' );
    }

    $iniciar = ( $_GET [ 'pagina' ]- 1 )* $articulos_x_pagina ;
   // echo $iniciar;

    $sql_articulos = 'SELECT * FROM articulos LIMIT :inicar,:narticulos' ;
    $sentencia_articulos = $pdo -> preparar ( $sql_articulos );
    $sentencia_articulos -> bindParam ( ':inicar' , $iniciar , PDO :: $PARAM_INT );
    $sentencia_articulos -> bindParam ( ':narticulos' , $articulos_x_pagina , PDO :: PARAM_INT );
    $sentencia_articulos -> ejecutar ();
    $resultado_articulos = $sentencia_articulos -> fetchAll ();
        ?>

    <?php  foreach ( $resultado_articulos  as  $articulo ): ?>

    <div  class =" alerta alerta-principal " rol =" alerta " >
        <?php   echo  $articulo [ 'titulo' ] ?>
    </div >

    <?php   endforeach ?>

    <nav  aria-label =" Ejemplo de navegación de página " >

        <ul  clase =" paginación " >

    <li  class =" página-elemento
    <?php  echo  $_GET [ 'pagina' ] <= 1 ? 'deshabilitado' : '' ?>
    " > <una  clase =" página-enlace " href =" index.php?pagina= <?php  echo  $_GET [ 'pagina' ]- 1  ?> " > ANTERIOR </a > </li >


    <?php for( $i = 0 ; $i <$paginas ; $i ++): ?>

    <li  class =" página-elemento
    <?php echo  $_GET [ 'pagina' ]== $i + 1 ? 'activo' : ''  ?> " >
        <a class =" página-enlace " href =" index.php?pagina= <?php  echo $i + 1 ?> " >
            <?php  echo $ i + 1 ?>
        </a >
    </li >
    <?php endfor ?>

    <li  class =" página-elemento
    <?php  echo   $_GET [ 'pagina' ]>= $paginas ? 'deshabilitado' : '' ?>
    " > <a  class =" página-enlace " href =" index.php?pagina= <?php  echo  $_GET [ 'pagina' ]+ 1  ?> " > SIGUIENTE </a > </li >


    </ul >
    </nav >

    </div >


    </cuerpo >
</html >