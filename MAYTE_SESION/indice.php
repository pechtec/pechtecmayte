<?php sesión_inicio(); 
<!DOCTYPE html>
<html  lang =" es " >
<cabeza >
    <juego de caracteres meta  =" UTF-8 " >
    <meta  http-equiv =" X-UA-Compatible " content =" IE=edge " >
    < meta  nombre =" ventana gráfica " contenido =" ancho=, escala-inicial=1.0 " >
    < título > Documento </ título >
</cabeza >
<cuerpo >
    <a  href =" sesion.php " > Iniciar sesión </ a >
    <a  href =" protegido.php " > contenido protegido </ a >
    <h1> BIENVENIDO: <?php  echo isset( $ _SESSION [ 'admin' ])? $ _SESSION [ 'admin' ]: 'INVITADO'  ?> </ h1 >
</cuerpo >
</html >
?>
