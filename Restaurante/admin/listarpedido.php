<!DOCTYPE html>
<html>
<head>
    <title>Redireccionamiento</title>
</head>
<body>


<?php

if ($conectar = mysqli_connect("localhost","root", "","prueba")){
	echo "<p>---------ESTOS SON LOS PEDIDOS ACTUALES-------</p>";

	// 2) Preparar la orden SQL
	$consulta= "SELECT*FROM menu";

	// puedo seleccionar de DB
	$db = mysqli_select_db( $conectar, "prueba" ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// 3) Ejecutar la orden y obtener datos
	$datos= mysqli_query ($conectar,$consulta);
	

	echo '<table border="1" style="width: 100%;">';
	echo '<tr>';
	echo  '<th>N° pedido</th>';
	echo '<th>Plato solicitado</th>';
	echo '<th>Pedidos extras</th>';
	echo '<th>Precio por unidad</th>';
	echo '<th>Cantidad</th>';
	echo '<th>Fecha</th>';
	echo '</tr>';
	
	  
	  while ($fila = mysqli_fetch_array($datos)) {
		echo "<tr>";
		echo "<td>" . $fila["menu_id"] . "</td>";
		echo "<td>" . $fila["nombre_plato"] . "</td>";
		echo "<td>" . $fila["descripcion"] . "</td>";
		echo "<td>" . $fila["precio"] . "</td>";
		echo "<td>" . $fila["cantidad"] . "</td>";
		echo "<td>" . $fila["fecha"] . "</td>";
		echo "</tr>";
	  }
	  
	
	

	mysqli_close($conectar);
}
else
	{
		echo "<p>error de conexion</p>";
}
?>

<?php
$enlace = "/RESTAURANTES/Restaurante/admin/admin.html";
?>


<a href="<?php echo $enlace; ?>">
    <button>VOLVER</button>
</a>


</body>
</html>