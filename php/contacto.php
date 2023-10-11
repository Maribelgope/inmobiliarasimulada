<!DOCTYPE html >
<html ><!-- InstanceBegin template="/Templates/lainmobiliaria.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/estiloslainmobiliaria.css">
<link rel="stylesheet" type="text/css" href="../css/estiloformulario.css">
<link rel="stylesheet" type="text/css" href="../css/sliderstilos.css">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Happy Homes Contacto</title>
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
	<div class="contacto"> 
		<div class="contacto_contacto">
   			<h2> Contacto</h2>
            	<form action="enviar_formulario.php" id="formulario">
                
  			<div class="enivar_correo">
      			<label for="nombre">Nombre y apellidos:</label>
      			<input type="text" id="nombre" name="nombre" required>
    		</div>
 
 			<div class="enviar_correo">
     	 		<label for="telefono">Teléfono:</label>
     	 		<input type="tel" id="telefono" name="telefono" required>
    		</div>
 
 			<div class="enviar_correo">
      			<label for="email">Email:</label>
      			<input type="email" id="email" name="email" required>
    		</div>
         
		 	<div class="enviar_correo">
      			<label for="mensaje">Mensaje:</label>
      			<textarea id="mensaje" name="mensaje" required></textarea>
    		</div>
 
 			<div id="botones">
  				<button type="button" class="eliminar" onClick="resetForm()">Eliminar</button>
				<input type="submit" class="enviar" value="Enviar" onClick="validarFormulario();">
			</div>
 
	 	</form>
  		<div id="confirmacion" style="display: none;">
  			<span class="close" onClick="cerrarConfirmacion()">&times;</span>
  			¡Tu mensaje ha sido enviado! Nos pondremos en contacto contigo muy pronto.
		</div>
	 

		<div class="mensaje_btn">
  			 Al pulsar el botón "ENVIAR" usted confirma que ha leído, entiende y acepta las condiciones de la Política de Privacidad expuestas en este
   			<span class="colorspan"><a href="../html/politicadeprivacidad.html" target="_blank" onClick="abrirPoliticaPrivacidad(event)">ENLACE.</a></span>
    	</div>

  
  		<div class="boton">
    		<input name="chk_si" type="checkbox" id="chk_si" value="1" />
    		Acepto la política de privacidad<br>
    		<input name="chk_comunicacion" type="checkbox" id="chk_comunicacion" value="1" />
   			Acepto las comunicaciones comerciales 
  		</div>         
                
	</div>   
	<div class="contacto_localizacion">
		<h2>Localización</h2>
		<div class="mapa">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d610.2972451817757!2d-4.098859404762604!3d40.55115714861693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2ses!4v1685094564983!5m2!1ses!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
		<div class="contacto_situacion">
			<div class="contacto_direccion">
		 		<p>C/ Lepanto, nº19<br> 28002, Madrid.</p>
			</div>
			<div class="contacto_direccion">
				<p>Teléfonos: 955 55 55 55 <br>
           		 Móviles:  666 66 66 66 <br>E-mail: 
         		<a href="mailto:info@happyhomes.com" class="mail">info@happyhomes.com</a>
     			</p>	
              </div>
		</div> 
		<div class="contacto_trabajo">
			<p>Si desea trabajar con nosotros, pongáse en contacto y envienos 
			su curriculum a través de nuestro correo 
      		<a href="mailto:info@happyhomes.com" class="mail">info@happyhomes.com
      		</a>
      		</p>
		</div>
	</div>            
</div >
<script>

document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("formulario").addEventListener('submit', validarFormulario); 
});

function validarFormulario(evento) {
  evento.preventDefault();
  var usuario = document.getElementById('nombre').value;
  var telefono = document.getElementById('telefono').value;
  var email = document.getElementById('email').value;
  var mensaje = document.getElementById('mensaje').value;
  var chkSi = document.getElementById('chk_si');
  var chkComunicacion = document.getElementById('chk_comunicacion');
  
  if (usuario.length == 0) {
    alert('No has escrito nada en el campo de nombre');
    return;
  } else if (usuario.length < 10) {
    alert('El nombre y apellidos deben tener al menos 10 caracteres');
    return;
  } else if (telefono.length == 0) {
    alert('No has escrito nada en el campo de teléfono');
    return;
  } else if (!/^[0-9]{6,15}$/.test(telefono)) {
    alert('El teléfono no es correcto');
    return;
  } else if (email.trim() === '') {
    alert('Por favor, ingresa tu correo electrónico');
    return;
  } else if (!/^\S+@\S+\.\S+$/.test(email)) {
    alert('Formato de correo electrónico incorrecto. Por favor, ingresa un correo electrónico válido');
    return;
  } else if (mensaje.trim() === '') {
    alert('Por favor, ingresa un mensaje');
    return;
  } else if (mensaje.trim().length < 10) {
    alert('El mensaje debe tener al menos 10 caracteres');
    return;
  } else if (!chkSi.checked || !chkComunicacion.checked) {
    alert('Debes aceptar tanto la política de privacidad como las comunicaciones comerciales');
    return;
  } else {
    mostrarConfirmacion();
  }
}

function resetForm() {
  document.getElementById("formulario").reset();
}

function mostrarConfirmacion() {
  document.getElementById("confirmacion").style.display = "block";
}

function cerrarConfirmacion() {
  document.getElementById("confirmacion").style.display = "none";
  resetForm();
}

function abrirPoliticaPrivacidad(event) {
  event.preventDefault(); // Evita que el enlace se abra directamente
  var url = event.target.href; // Obtiene la URL del enlace
  window.open('../html/politicadeprivacidad.html', 'Política de privacidad', 'width=500,height=500');
}

</script>

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
