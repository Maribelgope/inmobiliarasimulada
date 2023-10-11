<!DOCTYPE html >
<html ><!-- InstanceBegin template="/Templates/lainmobiliaria.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/estiloslainmobiliaria.css">
<link rel="stylesheet" type="text/css" href="../css/estiloformulario.css">
<link rel="stylesheet" type="text/css" href="../css/sliderstilos.css">
<!-- InstanceBeginEditable name="doctitle" -->
<title>hHappy Homes Alquiler</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head> 
<body>
<!-- Cabecera y Pestañas --> 

	<header class="cabecera">
  	<div class="logo">
   		<img src="../imagenes/fotos_varias/LOGO-HAPPY-HOMES1.png" width="140px">
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
				<li><a href="../index.php">Inicio</a></li>
				<li><a href="ventas.php?pestana=venta">Venta</a></li>
				<li><a href="alquiler.php?pestana=alquiler">Alquiler</a></li>
				<li><a href="../html/presentacion.html">Nosotros</a></li>
            <li><a href="../html/blog.html">Blog</a></li>
				<li><a href="contacto.php">Contacto</a></li> 
			</ul>
		</div>
     
   </header>
   
   
 
	<!--Fin de Cabecera y pestañas-->
    		
<!-- InstanceBeginEditable name="EditRegion3" -->
 
<div class="posicion_formulario">
<?php

include 'formulario.php';

?>

</div>
 

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
   	 	<img src="../imagenes/fotos_varias/redessociales.png" width="80px" alt="redes_sociales">
       	</div>	
		
 		<div class="servicios">
 			Nuestros servicios 
	   	<p>Gestión de compra-venta de Inmuebles | Alquiler de viviendas |
      	Administración de inmuebles | Certificados energéticos |
     		Peritación | Financiación | Asesor jurídico </p>
			<p style="text-align:center; font-size:12px">&copy; 2023 Happy Homes. Todos los derechos reservados. <a href="../html/politicadeprivacidad.html">Aviso Legal y Politica de Privacidad </a>| <a href="../html/politicadecookies.html">Politica de Cookies</a></p>
			<p style="text-align:center; font-size:12px">“La información contenida en esta web es orientativa y no tiene carácter vinculante”  </p>
		</div>
	</div>
</footer>                   
</body>
<!-- InstanceEnd --></html>
