<!DOCTYPE html >
<html  lang =" es " >
<cabeza >
    <juego de caracteres meta  =" UTF-8 " >
    <meta  http-equiv =" X-UA-Compatible " content =" IE=edge " >
    <meta  name =" viewport " content =" ancho=ancho-del-dispositivo, escala-inicial=1.0 " >
    <título > Documento </título >
</cabeza >
<cuerpo >
    <button  onclick =" obtener('dolar') " > DOLAR </button >
    <button  onclick =" obtener('euro') " > EURO </button >
    <ul  id =" resultado " >

    </ul >

    <guión>

        función obtener (moneda ) {
            buscar ( 'http://localhost/MAYTEPECH/backend/' + moneda )
        .entonces ( datos =>  datos . json ( ) )
        .entonces ( datos => {
            var resultado  =  documento . getElementById ( 'resultado' ) ;
            resultado _ HTML interno  =  '' ;
            for ( let  dato  de  datos ) {
                resultado _ HTML interno  +=  `
                <li>fecha: ${ dato . fecha } - valor: { $dato . valor } </li>
                ` ;
            }
        } ) 
        }

    </guión >
</cuerpo >
</html > 