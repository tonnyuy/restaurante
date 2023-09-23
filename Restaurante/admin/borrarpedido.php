<!DOCTYPE html>
<html>
<head>
    <title>Redireccionamiento</title>
</head>
<body>


<?php

// 1) Conexión
if ($conectar = mysqli_connect("localhost", "root", "","prueba")){
	echo "<p>PEDIDO</p>";
	$numpedido=$_POST['num_pedido'];
	echo $numpedido;
	
	// 2) Preparar la orden SQL delete
	$consulta= "DELETE FROM menu WHERE menu_id='$numpedido'";
	// puedo seleccionar de DB

	$db = mysqli_select_db( $conectar, "prueba" ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// 3) Ejecutar la orden y obtener datos
	$datos= mysqli_query ($conectar,$consulta);

	// 4) Verifico
	if($datos){
		if (mysqli_affected_rows($conectar) > 0) {
            echo "Pedido enviado correctamente";
        } else {
            echo "No existe ese número de pedido";
        }
    } else {
        echo "Error al ejecutar la consulta: " . mysqli_error($conectar);
    }
    mysqli_close($conectar);
		
}
$enlace = "/RESTAURANTES/Restaurante/admin/admin.html";
?>


<a href="<?php echo $enlace; ?>">
    <button>VOLVER</button>
</a>


</body>
</html>