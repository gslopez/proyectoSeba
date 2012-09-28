<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Cheaper.cl - Comprar</title>
<script src="http://code.jquery.com/jquery-1.8.0.min.js" type="text/javascript"></script>   
<script>
	$(document).ready(function() {document.getElementById('idB1').style.display = "block";})
</script>
<script language="javascript" type="text/javascript">
//Validacion de campos de texto no vacios by Mauricio Escobar
//
//Iván Nieto Pérez
//Este script y otros muchos pueden
//descarse on-line de forma gratuita
//en El Código: www.elcodigo.com


//*********************************************************************************
// Function que valida que un campo contenga un string y no solamente un " "
// Es tipico que al validar un string se diga
//    if(campo == "") ? alert(Error)
// Si el campo contiene " " entonces la validacion anterior no funciona
//*********************************************************************************

//busca caracteres que no sean espacio en blanco en una cadena
function vacio(q) {
        for ( i = 0; i < q.length; i++ ) {
                if ( q.charAt(i) != " " ) {
                        return true
                }
        }
        return false
}

//valida que el campo no este vacio y no tenga solo espacios en blanco
function valida(F) {
        
        if( vacio(F.nombre.value) == false || vacio(F.email.value) == false || vacio(F.telefono.value) == false ) {
                alert("Por favor rellene con todos los datos.")
                return false
        } else {
                
                //cambiar la linea siguiente por return true para que ejecute la accion del formulario
                return true
        }
        
}




</script>

<?php 
	$producto=$_GET['producto'];
	$precio=$_GET['precio'];
?>
<script type="text/javascript">
var todaysDate=new Date()
function selec1(){
	document.getElementById('idB1').style.display = "block";
	document.getElementById('idB2').style.display = "none";
}
function selec2(){
	document.getElementById('idB1').style.display = "none";
	document.getElementById('idB2').style.display = "block";
}
</script>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<script src="javascript/functions.js" type="text/javascript"></script>
<link rel="apple-touch-icon" href="homescreen.png"/>
<link href="startup.png" rel="apple-touch-startup-image" />
</head>

<body> 
<? 
if (!$HTTP_POST_VARS){ 
?> 
<div id="topbar">
  <div id="title">Formulario de Compra</div>
</div>

<div id="content">
<form method="post" onSubmit="return valida(this);">
<span class="graytitle">Ingrese sus datos</span>
<ul class="pageitem">
  <li class="bigfield"><input placeholder="Nombre" name="nombre" type="text" /></li>
  <li class="bigfield"><input placeholder="Email" name="email" type="text" /></li>
  <li class="bigfield"><input placeholder="Teléfono" name="telefono" type="text" /></li>
</ul>

<span class="graytitle">Forma de entrega</span>
<ul class="pageitem">
  <li class="radiobutton">
    <span class="name">Entrega directa</span>
    <input name="nradio" type="radio" onclick=selec1() value="1"  checked/>
  </li>
  <li class="radiobutton">
    <span class="name">Envío a domicilio</span>
    <input name="nradio" type="radio" onclick=selec2() value="2" />
  </li>
</ul>

<div id=idB1 style="display:none; font-size: 13px;">
<span class="graytitle">Entrega Directa</span>

<ul class="pageitem">
  <li class="bigfield"><input placeholder="Lugar de entrega" name="Lugar" type="text" /></li>
</ul>

<span class="graytitle">Seleccione una fecha</span>
<ul class="pageitem">
  <li class="bigfield"><input name="fecha" type="date"/></li>
</ul>

<span class="graytitle">Seleccione una hora</span>
<ul class="pageitem">
  <li class="select">
    <select name="hora">
      <option value="12:00">12:00</option>
      <option value="12:30">12:30</option>
      <option value="13:00">13:00</option>
      <option value="13:30">13:30</option>
      <option value="14:00">14:00</option>
      <option value="14:30">14:30</option>
      <option value="15:00">15:00</option>
      <option value="15:30">15:30</option>
      <option value="16:00">16:00</option>
      <option value="16:30">16:30</option>
      <option value="17:00">17:00</option>
      <option value="17:30">17:30</option>
      <option value="18:00">18:00</option>
      <option value="18:30">18:30</option>
      <option value="19:00">19:00</option>
      <option value="19:30">19:30</option>
      <option value="20:00">20:00</option>
      <option value="20:30">20:30</option>
      <option value="21:00">21:00</option>
      <option value="21:30">21:30</option>
      <option value="22:00">22:00</option>
    </select>
    <span class="arrow"></span>
  </li>
</ul>

</div>

<div id=idB2 style="display:none">
<span class="graytitle">Envío a Domicilio</span>
<ul class="pageitem">
  <li class="bigfield"><input placeholder="Ciudad" name="ciudad" type="text" /></li>
  <li class="bigfield"><input placeholder="Comuna" name="comuna" type="text" /></li>
  <li class="bigfield"><input placeholder="Dirección" name="direccion" type="text" /></li>
  <li class="bigfield"><input placeholder="RUT" name="rut" type="text" /></li>
  <li class="bigfield"><input placeholder="Banco" name="banco" type="text" /></li>
</ul>

</div>

<ul class="pageitem">
  <li class="button">
    <input name="Enviar" type="submit" value="Enviar" />
  </li>
</ul>
</form></div>

<div id="footer"><span>Cheaper.cl</span></div>
<? 
}else{ 
    $add_header = "From: Cheaper.cl <ventas@cheaper.cl>\r\n"; 
   	//Estoy recibiendo el formulario, compongo el cuerpo 
   	$cuerpo = "Formulario enviado\n\n"; 
   	$cuerpo .= "Nombre: " . $HTTP_POST_VARS["nombre"] . "\n"; 
   	$cuerpo .= "Email: " . $HTTP_POST_VARS["email"] . "\n"; 
	$cuerpo .= "Teléfono: " . $HTTP_POST_VARS["telefono"] . "\n";
	$cuerpo .= "Producto:".$producto."\n";
	$cuerpo .= "Precio:".$precio."\n";

if ($_REQUEST['nradio']=="1")
  {
	$mailcliente="Estimado ". $HTTP_POST_VARS["nombre"] .", 

Su compra del artículo ".$producto." por ".$precio." quedó agendada para el ". $HTTP_POST_VARS["fecha"] ." en ". $HTTP_POST_VARS["Lugar"] .". 

Si desea realizar modificaciones a dicho evento, por favor comuníquelo respondiendo este mail, o llamando al número 73653685 o 90336247. 

Nos comunicaremos vía teléfono para confirmar el encuentro. 

Atentamente,
Cheaper.cl";

    $cuerpo .= "Lugar: " . $HTTP_POST_VARS["Lugar"] . "\n"; 
	$cuerpo .= "Fecha: " . $HTTP_POST_VARS["fecha"] . "\n";
	$cuerpo .= "Hora: " . $HTTP_POST_VARS["hora"] . "\n";
  }
  else
  {
    if ($_REQUEST['nradio']=="2")
    {
		$mailcliente="Estimado ". $HTTP_POST_VARS["nombre"] .", 

Su compra del artículo ".$producto." por ".$precio." ha sido registrada. 

El siguiente paso es depositar la cantidad ".$precio." en la siguiente cuenta:

Nombre: Sebastián Hernández
RUT: 17961993-8
Mail: ventas@cheaper.cl  
Banco: BCI
Número de cuenta: 81725086
Tipo de cuenta: Cuenta Corriente

Una vez recibido el pago, procederá el envío del ".$producto." a la dirección ".$HTTP_POST_VARS["direccion"]." ".$HTTP_POST_VARS["comuna"]." ".$HTTP_POST_VARS["region"].".

Si desea contactarse con nosotros, por favor hágalo respondiendo este mail, o llamando al número 73653685 o 90336247. 

Atentamente, 
Cheaper.cl";

    $cuerpo .= "Región: " . $HTTP_POST_VARS["region"] . "\n"; 
	$cuerpo .= "Comuna: " . $HTTP_POST_VARS["comuna"] . "\n";
	$cuerpo .= "Dirección: " . $HTTP_POST_VARS["direccion"];
	$cuerpo .= "RUT:" . $HTTP_POST_VARS["rut"] . "\n";
	$cuerpo .= "Banco:" . $HTTP_POST_VARS["banco"] . "\n";
	$cuerpo .= "Producto:".$producto."\n";
	$cuerpo .= "Precio:".$precio."\n";

    }
  }
  
  
	
   	//mando el correo... 
	mail($HTTP_POST_VARS["email"],"Compraste ".$producto." en Cheaper.cl",$mailcliente,$add_header);
	mail("ventas@cheaper.cl","Formulario recibido",$cuerpo); 
	

   	//doy las gracias por el envío
	
	if ($_REQUEST['nradio']=="1")
	{echo "Gracias por tu compra.<br><br>Te llamaremos en breves instantes para confirmar tu compra.<br><br>Además, te enviamos un correo electrónico con mas detalles. Si no puedes visualizarlo, por favor revisa tu Correo Electrónico No Deseado.<br><br>Atentamente,<br>Cheaper.cl";
		} 
	if ($_REQUEST['nradio']=="2")
	{echo "Gracias por tu compra.<br><br>Te acabamos de enviar un mail con las instrucciones para concretar tu compra.<br><br>Atentamente,<br>Cheaper.cl";
		}
 
} 
?></body></html>