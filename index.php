<!DOCTYPE html >
<html ><!-- InstanceBegin template="/Templates/lainmobiliaria.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/estiloslainmobiliaria.css">
<link rel="stylesheet" type="text/css" href="css/estiloformulario.css">
<link rel="stylesheet" type="text/css" href="css/sliderstilos.css">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Happy Homes inmobiliaria</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head> 
<body>
<!-- Cabecera y Pestañas --> 

	<header class="cabecera">
  	<div class="logo">
   		<img src="imagenes/fotos_varias/LOGO-HAPPY-HOMES1.png" width="140px">
   	</div>
		<div class="tlfn">
		 555 666 444 info@happyhomes.com 
		</div>
       <?php
    // Inicializar la variable $pestana
    	$pestana = '';
    // Verificar si se ha enviado la variable 'pestana' en la URL
   		 if (isset($_POST['pestana'])) {
        			$pestana = $_POST['pestana'];
   		 }
    ?>
       <div id="menu" class="pestanas">
 			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="php/ventas.php?pestana=venta">Venta</a></li>
				<li><a href="php/alquiler.php?pestana=alquiler">Alquiler</a></li>
				<li><a href="html/presentacion.html">Nosotros</a></li>
            <li><a href="html/blog.html">Blog</a></li>
				<li><a href="php/contacto.php">Contacto</a></li> 
			</ul>
		</div>
     
   </header>
   
   
 
	<!--Fin de Cabecera y pestañas-->
    		
<!-- InstanceBeginEditable name="EditRegion3" -->
<script>
<!---------Para mostrar y recoger la aceptación de las cookies---->
document.addEventListener("DOMContentLoaded", function() {
  var cookieMessage = document.getElementById("cookie-message");
  var cookieOK = document.getElementById("cookie-ok");

  // Verificar si el usuario ya ha aceptado las cookies
  var cookieAccepted = sessionStorage.getItem("cookieAccepted");

  // Si ya ha aceptado las cookies, ocultar el mensaje
  if (cookieAccepted) {
    cookieMessage.style.display = "none";
  } else {
    // Mostrar el mensaje de cookies si no se ha aceptado previamente
    cookieMessage.style.display = "block";
  }

  // Ocultar el mensaje y almacenar la aceptación en sessionStorage al hacer clic en "OK"
  cookieOK.addEventListener("click", function() {
    cookieMessage.style.display = "none";
    sessionStorage.setItem("cookieAccepted", true);
  });
});

 //La función para mostras más datos de búsqueda
function mostrarDatosAvanzados() {
  var datosAvanzados = document.getElementById("datos-avanzados");
  datosAvanzados.style.display = "block";
}
</script>
          <!-- el aviso de cookies -->
<div id="cookie-message">
  	<p>Esta web utiliza cookies para obtener datos estadísticos de la navegación de sus usuarios. 
 					 Si continuas navegando consideramos que aceptas su uso.</p>
  	<div class="cookie-buttons">
    	<a href="html/configuracioncookies.html" target="_blank" onClick="window.open('html/configuracioncookies.html', 'Configuración de cookies', 'width=500,height=500'); return false;">Configuración de cookies</a>
    	<a href="html/politicadecookies.html" target="_blank" onClick="window.open('html/politicadecookies.html', 'Politica de cookies', 'width=500,height=500'); return false;">Política de cookies</a>
    	<button id="cookie-ok">OK</button>
  	</div>
</div>

      <!-- fin del aviso de cookies -->

<!--Las frases que aparecen encima de la fotografía y la fotografía-->
	<div class="imagen_texto">
		<div class="img_text">
			<img src="imagenes/fotos_varias/portadadefinitiva.jpg" alt="casa">
		</div> 
	
 		<div class="texto">
			<p class="frase1">Vendemos tu casa</p>
			<p class="frase2">Encontramos tu hogar</p>
		</div>
	</div>
<!--        inclusion del formularo y la búsqueda        -->

<h1 style="text-align: center;">Inmuebles disponibles a buscar en este momento</h1>
<?php

include 'php/formulario.php';
?> 

 
 <!-- InstanceEndEditable -->
 
<!------------El pie ------------------------------------> 
<hr class="separador">
<footer>

  	<header class="encima_footer">
	 	<div class="contactame">
  			Contáctanos.
 		</div> 
		<div class="grid-ciudades">
  			<div class="grid-item">Barcelona: Pº de Gracia, 23.</div>
  			<div class="grid-item">Tlfno:555.444.1112</div>
  			<div class="grid-item">Bilbao: Garn vía, 56.</div>
  			<div class="grid-item">Tlfno:555.444.2224</div>
  			<div class="grid-item">Madrid: Calle Alcalá, 23.</div>
  			<div class="grid-item">Tlfno:555.444.333</div>
 			<div class="grid-item">Málaga: Pº del Parque, 24.</div>
  			<div class="grid-item">Tlfno:555.444.444</div>
  			<div class="grid-item">Sevilla: Calle Sierpes, 12.</div>
  			<div class="grid-item">Tlfno:555.444.555</div>
  			<div class="grid-item">Valencia: Pº del Mar, 34.</div>
  			<div class="grid-item">Tlfno:555.444.666</div>
		</div> 
 	</header>
	
    <div class="color_footer"> 
 	 	<div class="redes_sociales">
			SÍGUENOS EN:           
   	 	<img src="imagenes/fotos_varias/redessociales.png" width="80px" alt="redes_sociales">
       	</div>	
		
 		<div class="servicios">
 			Nuestros servicios 
	   	<p>Gestión de compra-venta de Inmuebles | Alquiler de viviendas |
      	Administración de inmuebles | Certificados energéticos |
     		Peritación | Financiación | Asesor jurídico </p>
			<p style="text-align:center; font-size:12px">&copy; 2023 Happy Homes. Todos los derechos reservados. <a href="html/politicadeprivacidad.html">Aviso Legal y Politica de Privacidad </a>| <a href="html/politicadecookies.html">Politica de Cookies</a></p>
			<p style="text-align:center; font-size:12px">“La información contenida en esta web es orientativa y no tiene carácter vinculante”  </p>
		</div>
	</div>
</footer>                   
</body>
<!-- InstanceEnd --></html>
