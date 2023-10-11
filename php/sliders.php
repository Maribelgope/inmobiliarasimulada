<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="../css/sliderstilos.css">
<head>

</head>
<body>

<!-- Cabecera y Pestañas --> 
	<header class="cabecera_slider">
 		<div class="logo_slider">
		<span class="logo"><img src="../imagenes/fotos_varias/LOGO-HAPPY-HOMES1.png" width="100px"></span>
  		</div>
    
      <div id="menu_slider" class="pestanas_slider">
     	 <ul>
     		 <li><a href="../index.php">Inicio</a></li>
     		 <li><a href="../php/ventas.php">Venta</a></li>
     		 <li><a href="../php/alquiler.php">Alquiler</a></li>
				<li><a href="../html/presentacion.html">Nosotros</a></li>
            <li><a href="../html/blog.html">Blog</a></li>
				<li><a href="../php/contacto.php">Contacto</a></li> 
 				</ul>
		</div> 
	<div class="direccion_slider">	
	<ul>
   	<li>C/ Lepanto, nº19 28002, Madrid.</li>
		<li>Teléfonos: 955 55 55 55   Móviles: 666 66 66 66 </li>
		<li>E-mail: info@happyhomes.com</li>
      </ul>	
 	</div>
	</header>

         <!-- Comienzo con la preparación para php -->
 <?php
    // Inicializar la variable $pestana
    	$pestana = '';

    // Verificar si se ha enviado la variable 'pestana' en la URL
   		 if (isset($_GET['pestana'])) {
        			$pestana = $_GET['pestana'];
   		 }
		// Conexión a la base de datos
	/*	$servername = "localhost";
		$username = "dbu5557275";
		$password = "H4ppy-homes#";
		$dbname = "db11110579";*/
		
$servername = 'db5013468703.hosting-data.io';
$username = "dbu5618944";
$password = "H4ppy-homes#";
$dbname = "dbs11286790";

		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
    		die("Error de conexión: " . $conn->connect_error);
		}		 
	 
		?>

              <!--División de la pantalla en 3 columnas-->
<div class="container">
 
               <!--primera columna datos del propietario-->
  	
    <div class="columna1">
		<?php

		// Verificar si se ha pasado el parámetro "id_vivienda" en la URL
		if(isset($_GET['id_vivienda'])) {
 		// Obtener el valor del parámetro "id_vivienda"
  		$id_vivienda = $_GET['id_vivienda'];
			} else {
  			// Si no se ha pasado el parámetro "id_vivienda", mostrar un mensaje de error
  				echo "Error: No se ha especificado el ID de la vivienda";
			}
			// Realizar la conexión a la base de datos y ejecutar la consulta SQL
			$query = "SELECT propietarios.nombre, propietarios.apellido, propietarios.telefono, propietarios.correo_electronico
          			FROM viviendas
          			JOIN propietarios ON viviendas.id_propietarios = propietarios.id_propietarios
         		 	WHERE viviendas.id_vivienda = '" . $id_vivienda . "'";

			$result = mysqli_query($conn, $query);
		?>
		<div class="propiedad_slider">
        		
			<?php
			// Imprimir los resultados en pantalla
			if (mysqli_num_rows($result) > 0) {
    			while ($row = mysqli_fetch_assoc($result)) {
				echo '<div class="propietario_slider">Contacta con el dueño de la propiedad</div>';
		 		echo '<div class="etiqueta_slider1">Nombre y apellido: </div>';
       			echo  '<div class="etiqueta_slider">' .$row['nombre'] . ' ' . $row['apellido'] . '<br></div>';
       			echo '<div class="etiqueta_slider1">Teléfono: <br></div>';
       			echo  '<div class="etiqueta_slider">'.$row['telefono'] . "<br></div>";
		 			echo '<div class="etiqueta_slider1">Correo Electrónico: <br></div>';
       			echo  '<div class="etiqueta_slider">'.$row['correo_electronico'] . "<br></div>";
   			 }
			} else {
   			 echo "No se encontraron resultados.";
			}
			?>
		 </div> 
   </div>
 
               <!--segunda columna fotos de la vivienda--> 
  
  <div class="columna2">
  	<?php
		// Consulta SQL para obtener la foto principal y las fotos pequeñas
		$sql = "SELECT foto_principal, foto1, foto2, foto3, foto4 FROM fotos WHERE id_fotos = '$id_vivienda'";
		$resultado = $conn->query($sql);

		if ($resultado->num_rows > 0) {
   		 // Obtener los datos de la consulta
    		$fila = $resultado->fetch_assoc();
	 		$id_vivienda = $_GET['id_vivienda'];
   			$fotoPrincipal = $fila['foto_principal'];
   			$foto1 = $fila['foto1'];
    		$foto2 = $fila['foto2'];
    		$foto3 = $fila['foto3'];
    		$foto4 = $fila['foto4'];


    	// Mostrar el slider
	 		echo '<div class="slider-container">';
    		echo '<div class="slider-large">';
    		echo '<img src="data:image/jpeg;base64,' . base64_encode($fotoPrincipal) . '" alt="Foto grande">';
    		echo '</div>';
    		echo '<div class="slider-thumbnails">';
	 		echo '<img src="data:image/jpeg;base64,' . base64_encode($fotoPrincipal) . '" alt="Foto grande">';
    		echo '<img src="data:image/jpeg;base64,' . base64_encode($foto1) . '" alt="Foto 1">';
    		echo '<img src="data:image/jpeg;base64,' . base64_encode($foto2) . '" alt="Foto 2">';
    		echo '<img src="data:image/jpeg;base64,' . base64_encode($foto3) . '" alt="Foto 3">';
    		echo '<img src="data:image/jpeg;base64,' . base64_encode($foto4) . '" alt="Foto 4">';
    		echo '</div>';
    		echo '</div>';
		} else {
    	echo "No se encontraron datos de imágenes en la base de datos";
		}
		?>
	</div>
               <!--tercera columna formulario de contacto-->  
 <div class="columna3">  
	<div class="formulario_slider">
		<h2> ¡CONTACTA YA!</h2>
         <div class="datos_slider">
				<form action="enviar_formulario.php" id="formulario">
				<ul>
					<li>
						<input class="full" required placeholder="Nombre y apellidos" name="name" type="text" value="" id="name">                                    
					</li>
					<li >
						<input class="full" required placeholder="Email" name="email" type="email" value="" id="email">
					</li>
					<li>
						<input class="full" required placeholder="Teléfono" name="phone" type="text" value="" id="phone"> 
					</li>
					<li>
						<textarea maxlength="80" class="full" cols="30" rows="10" name="text" id="text" required placeholder="Desearía recibir más informacion sobr..."></textarea>
					</li>
					<li>
						<input id="contactar_email" class="contactar_email" type="button" onClick="enviar_formulario.php" value="Enviar">  
					</li>
					<li>
               	<div class="acepto_slider">
						<input  name="chk_si" type="checkbox" id="chk_si" value="1" /> 
						Al solicitar información acepto el <a href="#" >Aviso Legal</a>
						y la <a href="#" >Política de privacidad</a>
                  </div>
					</li> 
               </ul>
					</form>
				</div>
			</div>
 	 </div>
</div>


<!--////////////////////////////////////////////////////////////-->

<div class="descripcion_slider">

		<?php
				/////Declaración de variables/////////////////////

		$tipo_transaccion = isset($_POST['tipo_transaccion']) ? $_POST['tipo_transaccion'] : '';
		$ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : '';
		$tipo_propiedad = isset($_POST['propiedad']) ? $_POST['propiedad'] : '';
		$precio = '';
		$metros = isset($_POST['metros']) ? $_POST['metros'] : '';
		$habitaciones = isset($_POST['habitaciones']) ? $_POST['habitaciones'] : '';
		$banos = isset($_POST['banos']) ? $_POST['banos'] : '';
		$estado = isset($_POST['estado']) ? $_POST['estado'] : '';
		$id_vivienda = '';
		$alquiler='';
   		$id_vivienda_descripcion = $_GET['id_vivienda'];		

		
		// hacer la búsqueda//
		$queryVivienda = "SELECT * FROM viviendas WHERE id_vivienda = '$id_vivienda_descripcion'";
		$resultVivienda = mysqli_query($conn, $queryVivienda);
	

           

	
// Mostrar los resultados en pantalla
if (mysqli_num_rows($resultVivienda) > 0) {
    while ($rowVivienda = mysqli_fetch_assoc($resultVivienda)) {
		 
		 
		 if (($rowVivienda['tipo_transaccion'] == 'Ambas') || ($rowVivienda['tipo_transaccion'] == '')){
			echo '<div class="label_slider"> Venta o alquiler '. $rowVivienda['tipo_propiedad']." en ". $rowVivienda['ciudad']."</div>";
       }elseif (($rowVivienda['tipo_transaccion'] == 'Venta') || ($rowVivienda['tipo_transaccion'] == 'Ambas')){
			echo '<div class="label_slider"> Venta '. $rowVivienda['tipo_propiedad']." en ". $rowVivienda['ciudad']."</div>";
		 }elseif (($rowVivienda['tipo_transaccion'] == 'Alquiler') || ($rowVivienda['tipo_transaccion'] == 'Ambas')){
			echo '<div class="label_slider"> Alquiler '. $rowVivienda['tipo_propiedad']." en ". $rowVivienda['ciudad']."</div>";
		 }
			 
			 if (($rowVivienda['tipo_transaccion'] == 'Ambas') || ($rowVivienda['tipo_transaccion'] == '')){
			echo '<div class="label_slider"> Precio venta: <span style="font-weight: normal;">'. number_format($rowVivienda['precio_venta'], 0, ',', '.') . "€</span></div>";
      	echo '<div class="precio_slider"> Precio alquiler: <span style="font-weight: normal;">'. number_format($rowVivienda['precio_alquiler'], 0, ',', '.') ."€</span></div>";
		 }elseif (($rowVivienda['tipo_transaccion'] == 'Venta') || ($rowVivienda['tipo_transaccion'] == 'Ambas')){
			echo '<div class="label_slider"> Precio venta: <span style="font-weight: normal;">'. number_format($rowVivienda['precio_venta'], 0, ',', '.') ."€</span></div>";
		 }elseif (($rowVivienda['tipo_transaccion'] == 'Alquiler') || ($rowVivienda['tipo_transaccion'] == 'Ambas')){
			echo '<div class="label_slider"> Precio alquiler: <span style="font-weight: normal;">'. number_format($rowVivienda['precio_alquiler'], 0, ',', '.') ."€</span></div>";
		 }
	 	echo '<div  class="label_slider"> Descripción del inmueble.</br></div>';
		echo '<div class="label_slider"><span style="font-weight: normal;">' . $rowVivienda['descripcion'].'</span></div>';
		echo '<div class="label_slider">Situación del inmueble: <span style="font-weight: normal;">' . $rowVivienda['estado'] . '</span></div>';
		echo '<div class="label_slider">Distribución del inmueble </br></div>';

		echo '<div class="distribucion_slider">';
  		echo '<div class="label_slider">  Habitaciones: <span style="font-weight: normal;">  ' . $rowVivienda['habitaciones']. '</span> </div>';
		echo '<div class="dibujo"> <img src="../imagenes/fotos_varias/habitaciones.png" alt="h" width="40"> </div>';
	   	echo '<div class="label_slider"> Baños: <span style="font-weight: normal;">  '. $rowVivienda['banos']. ' </div>';
		echo '<div class="dibujo"> <img src="../imagenes/fotos_varias/bano.png" alt="b" width="30">  </div>';
		echo '</div>';
		
		echo '<div class="label_slider">Superficie del inmueble</br></div>';
				
    	echo '<div class="metros_slider">';
			
		echo  '<div class="label_slider">  M<sup>2</sup> construidos : <span style="font-weight: normal;">  ' . $rowVivienda['metros'] . "m&#178; </span></div>";
   		echo '<div class="dibujo"> <img src="../imagenes/fotos_varias/metros.png" alt="m" width="30" >  </div>';
		echo '</div>';
    }
		} else {
   	 echo "No se encontraron resultados.";
		}
?>


</div>



<footer class="footer_slider">
 <p>Se pone a disposición del consumidor la ficha abreviada informativa en base a la normativa vigente. No incluidos en el precio los impuestos y gastos generados por la transmisión.</p>

</footer>


<script>
// Seleccionar las miniaturas del slider
var thumbnails = document.querySelectorAll('.slider-thumbnails img');

// Asignar evento de clic a cada miniatura
thumbnails.forEach(function(thumbnail) {
  thumbnail.addEventListener('click', function() {
    // Obtener la ruta de la imagen seleccionada
    var imagePath = this.getAttribute('src');

    // Obtener la imagen grande del slider
    var largeImage = document.querySelector('.slider-large img');

    // Cambiar la imagen grande por la imagen seleccionada
    largeImage.setAttribute('src', imagePath);
  });
});
</script>

</body>
</html>

