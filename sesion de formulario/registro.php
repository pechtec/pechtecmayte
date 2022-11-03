<!DOCTYPE html>
<html  idioma = " es " >
<cabeza >
    <juego de caracteres meta  = " UTF-8 " >
    <meta  http-equiv = " X-UA-Compatible "  content = " IE=edge " >
    <meta  nombre = " ventana gráfica "  contenido = " ancho = ancho del dispositivo, escala inicial = 1.0 " >
    <título >Documento</título >
</cabeza >
<cuerpo >
    <h3 >Registro de usuario</h3 >
    <acción de formulario  = " agregar_usuario.php " método = " POST " > 
        <tipo de entrada  = " texto " nombre = " nombre_usuario " placeholder = " ingresa usuario " >  
        <tipo de entrada  = " texto " nombre = " contrasena " placeholder = " ingresa contraseña " >  
        <tipo de entrada  = " texto " nombre = " contrasena2 " placeholder = " ingresa nuevamente pass " >  
        <tipo de boton  = " enviar " >Guardar</boton >
    </formulario >
    <h3 >iniciar sesión</h3 >
    <acción de formulario  = " login.php " método = " POST " > 
        <tipo de entrada  = " texto " nombre = " nombre_usuario " placeholder = " ingresa usuario " >  
        <tipo de entrada  = " texto " nombre = " contrasena " placeholder = " ingresa contraseña " >  
        <tipo de boton  = " enviar " >Guardar</boton >
    </formulario >
</cuerpo >
</html >