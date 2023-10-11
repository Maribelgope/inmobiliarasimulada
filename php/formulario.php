<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/estiloformulario.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<title>Formulario de busqueda</title>
</head>

 <script>
    function mostrarDatosAvanzados() {
      var datosAvanzados = document.getElementById("datos-avanzados");
      datosAvanzados.style.display = "block";
    }
    
  </script>
<body>

<?php
if (isset($_GET['pestana'])) {
    $pestana = $_GET['pestana'];
} else {
    $pestana = ""; 
}
?>
<div class="formulario">
	<form action="" method="POST">
		
           
         <div class="operacion">
         	<label for="operacion">Operación</label>
    		<select name="tipo_transaccion" class="operacion">
       			 <option value="" selected disabled>Operaciones</option>
        			<option value="venta" <?php if ($pestana === 'venta') echo 'selected="selected"'; ?>>Venta</option>
        		<option value="alquiler" <?php if ($pestana === 'alquiler') echo 'selected="selected"'; ?>>Alquiler</option>
    		</select>
		</div>
        
   		<div class="ciudad">
				<label for="ciudad">Ciudad</label>
				<select name="ciudad" class="ciudad" >
  					<option value="" selected disabled>Ciudad</option>
  					<option value="todas">Todas</option>
  					<option value="Barcelona">Barcelona</option>
  					<option value="Bilbao">Bilbao</option>
  					<option value="Madrid">Madrid</option>
  					<option value="Malaga">Málaga</option>
  					<option value="Sevilla">Sevilla</option>
  					<option value="Valencia">Valencia</option>
				</select>
			</div>
            
			<div class="propiedad">
				<label for="propiedad">Tipo de propiedad</label>
  					<select name="propiedad" class="propiedad" >
   	 					<option value="" selected disabled>Tipo de propiedad</option>
    					<option value="piso">Piso</option>
    					<option value="ático">Ático</option>
    					<option value="dúplex">Dúplex</option>
    					<option value="chalet independiente">Chalet independiente</option>
    					<option value="chalet pareado">Chalet pareado</option>
    					<option value="chalet adosado">Chalet adosado</option>
  					</select>
			</div>                    
        	
            <div class="construccion">
  				<label for="construccion">Año de construcción</label>
  				<input type="number" class="construccion custom-input" name="anno_construccion" placeholder="Desde año de construcción">
			</div>

   			<div id="botones">
     			<button type="button" class="filtros" onClick="mostrarDatosAvanzados()">+ Filtros</button>   
     			<button type="submit" class="buscar">Buscar</button>
      		</div>
        
        <!-- Aquí van los campos adicionales --> 
        
        	<div id="datos-avanzados" style="display: none;"> 
			
        	<div class="metros">
   		 		<label for="metros">Metros</label>
   		 	 	<input type="number" class="construccion custom-input" name="metros" placeholder="Desde metros...">
			</div>
       
			<div class="habitaciones">
 				<label for="habitaciones">Habitaciones</label>
					<select name="habitaciones">
					  	<option value="" disabled selected hidden>Nº habitaciones</option>
  						<option value="1">1</option>
 						<option value="2">2</option>
 						<option value="3">3</option>
  						<option value="4">4 o más</option>
					</select>
			</div>
			
            <div class="banos">
 				<label for="banos">Baños</label>
					<select name="banos">
					  	<option value="" disabled selected hidden>Nº baños</option>
  						<option value="1">1</option>
 						<option value="2">2</option>
 						<option value="3">3 o más</option>
					</select>
			</div> 

      		<div class="precio" >
      			<label for="precio">Precio máximo</label>
            	<input type="number" class="construccion custom-input" name="precio" placeholder="Hasta precio...">
			</div>     		
		
        	<div class="estado">
				<label for="estado">Estado</label>
  					<select name="estado" class="estado">
    					<option value="" selected disabled>Estado</option>
    					<option value="A reformar">A reformar</option>
    					<option value="Buen estado">Buen estado</option>
               			<option value="Obra nueva">Obra nueva</option>
  					</select>
			</div>          
        
        	<div class="amueblada">
  				<label for="amueblada">¿Amueblada?</label>
  					<div class="redondel">
   				 		<input type="radio" id="amueblada_si" name="amueblada" value="si">
    					<label for="amueblada_si">Sí</label>
  					</div>
 					<div class="redondel">
    				<input type="radio" id="amueblada_no" name="amueblada" value="no">
   				 	<label for="amueblada_no">No</label>
  					</div>
			</div>
        <!--	            Fin del formulario      		-->
        
       </div> 
	</form>
</div>




<?php
 
// Definir las credenciales de acceso a la base de datos

// credenciales para la base de datos de ionos

$servername = 'db5013468703.hosting-data.io';
$username = "dbu5618944";
$password = "H4ppy-homes#";
$dbname = "dbs11286790";


// credenciales para la base de datos local
/*$servername = "localhost";
$username = "dbu5557275";
$password = "H4ppy-homes#";
$dbname = "db11110579";*/

 // Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si se ha establecido correctamente la conexión
if ($conn->connect_error) {
  die("Fallo en la conexión a la base de datos: " . $conn->connect_error);
} 

///Declaración de variables/////////////////////

$tipo_transaccion = isset($_POST['tipo_transaccion']) ? $_POST['tipo_transaccion'] : '';
$ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : '';
$tipo_propiedad = isset($_POST['propiedad']) ? $_POST['propiedad'] : '';
$anno_construccion = isset($_POST['anno_construccion']) ? $_POST['anno_construccion'] : '';
$metros = isset($_POST['metros']) ? $_POST['metros'] : '';
$habitaciones = isset($_POST['habitaciones']) ? $_POST['habitaciones'] : '';
$banos = isset($_POST['banos']) ? $_POST['banos'] : '';
$precio = isset($_POST['precio']) ? $_POST['precio'] : '';
$estado = isset($_POST['estado']) ? $_POST['estado'] : '';
$amueblada = isset($_POST['amueblada']) ? $_POST['amueblada'] : '';
$id_vivienda = '';
////Código de búsqueda según lo pedido en el formulario///////////////////

$sql = "SELECT *,
        CASE
            WHEN (tipo_transaccion = 'Venta' OR tipo_transaccion = 'Ambas') THEN precio_venta
            WHEN (tipo_transaccion = 'Alquiler' OR tipo_transaccion = 'Ambas') THEN precio_alquiler
            ELSE 0
        END AS precio
        FROM viviendas
        WHERE ('$tipo_transaccion' = '' OR ('$tipo_transaccion' = 'Venta' AND (tipo_transaccion = 'Venta' OR tipo_transaccion = 'Ambas'))
            OR ('$tipo_transaccion' = 'Alquiler' AND (tipo_transaccion = 'Alquiler' OR tipo_transaccion = 'Ambas')))
            AND (tipo_propiedad = '$tipo_propiedad' OR '$tipo_propiedad' = '')
            AND (ciudad = '$ciudad' OR ciudad = '' OR '$ciudad' = '')
            AND (anno_construccion > '$anno_construccion' OR '$anno_construccion' = '')
            AND (metros >= '$metros' OR '$metros' = '')
            AND (habitaciones >= '$habitaciones' OR '$habitaciones' = '')
            AND (banos >= '$banos' OR '$banos' = '')
            AND ((tipo_transaccion = 'Venta' AND precio_venta <= '$precio') OR (tipo_transaccion = 'Alquiler' AND precio_alquiler <= '$precio') OR '$precio' = '')
            AND (estado = '$estado' OR '$estado' = '')
            AND (amueblada >= '$amueblada' OR '$amueblada' = '')";


////// Resultado de la búsqueda /////////////
$resultado = mysqli_query($conn, $sql);
?>

<div class="listado">

<?php
if ($resultado) {
 // imprimir las transacciones de alquiler con estilo en cada div
  while ($fila = mysqli_fetch_array($resultado)) {
    echo "<div class='cuadrado'>";
	 //////
	 /*echo "<div class='referencia'>Referencia: QHR00". $fila['id_vivienda']. "</div>";
   */ echo "<div class='tipo'>" . $fila['tipo_propiedad'] . "</div>";
 
    // Mostrar precio dependiendo del tipo de transacción
	    if ($fila['tipo_transaccion'] == 'Venta'){
		 echo "<div class='precio_listado'>Precio Venta: " . number_format($fila['precio_venta'], 0, ',', '.') . " €</div>";
	 }elseif ($fila['tipo_transaccion'] == 'Alquiler'){
		 echo "<div class='precio_listado'>Precio Alquiler: " . number_format($fila['precio_alquiler'], 0, ',', '.') . " €</div>";
	 }elseif ($fila['tipo_transaccion'] == 'Ambas'){
		 echo "<div class='precio_listado'>Precio Venta: " . number_format($fila['precio_venta'], 0, ',', '.') . " €
		<br>Precio alquiler: " . number_format($fila['precio_alquiler'], 0, ',', '.') . " €</div>";
		} elseif ($fila['tipo_transaccion'] == 'Alquiler' || $fila['tipo_transaccion'] == 'Ambas') {
		if ($fila['tipo_transaccion'] == 'Ambas'){
}	
		echo "<div class='precio_listado'>Precio Alquiler: " . number_format($fila['precio_alquiler'], 0, ',', '.') . " €</div>";
    } elseif ($fila['tipo_transaccion'] == '' || $fila['tipo_transaccion'] == 'Ambas') {
		echo "<div class='precio_listado'>Precio Venta: " . number_format($fila['precio_venta'], 0, ',', '.') . " €</div>
		<br><div class='precio'>Precio alquiler:" . number_format($fila['precio_venta'], 0, ',', '.') . " €</div>No disponible</div>";
    }
  
  // continuación de atributos
    echo "<div class='tipo_transaccion'>" . $fila['tipo_transaccion'] . "</div>";

	  // Mostrar la pagina para ver el slider
    echo '<a href="../php/sliders.php?id_vivienda=' . $fila['id_vivienda'] . '">';
	echo "<div class='foto'><img src='data:image/jpeg;base64," . base64_encode($fila['imagen']) . "'></div>";
	echo "</a>";
    echo "<div class='direccion'>" . $fila['direccion'] . ', '.$fila['ciudad']."</div>";
	echo '<div class="caracterisitcas">';
	echo '<div class="metros"><img src="../imagenes/fotos_varias/metros.png" alt="m" width="30" > '. $fila['metros']. 'm&#178;</div>';
	echo '<div class="habitaciones"><img src="../imagenes/fotos_varias/habitaciones.png" alt="h" width="40"> '. $fila['habitaciones']. '</div>';
	echo '<div class="banos"><img src="../imagenes/fotos_varias/bano.png" alt="b" width="30"> '. $fila['banos']. '</div>';
	echo "</div></div>";			  	
  }
} else {
  // si el valor no es "venta" ni "alquiler", mostrar un mensaje de error
  echo "<h2>Error: tipo de transacción no válido</h2>";
}

////// Acabar con la búsqueda /////
mysqli_free_result($resultado);
mysqli_close($conn);
?>
</div>

 </body>
 </html>