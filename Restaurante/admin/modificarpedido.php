<!DOCTYPE html>
<html>
<head>
    <title>Redireccionamiento</title>
</head>
<body>

<?php

// Conectar a la base de datos (asegúrate de haber establecido la conexión antes)
$conectar = mysqli_connect("localhost", "root", "", "prueba");

// Verificar la conexión
if (!$conectar) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Variables con los valores a actualizar
$menuid =$_POST['menu_id']; 
$descripcion = $_POST['descripcion'];
$nombreplato =$_POST['nombre_plato']; // Cambia esto al correo que deseas actualizar
$cantidad = $_POST['cantidad'];

// Consulta SQL para actualizar los datos
$consulta = "UPDATE menu SET descripcion='$descripcion', nombre_plato='$nombreplato', cantidad='$cantidad' WHERE menu_id='$menuid'";

// Ejecutar la consulta
$datos = mysqli_query($conectar, $consulta);

// Verificar si la actualización fue exitosa
if ($datos) {
    echo "Actualización exitosa";
} else {
    echo "Error en la actualización: " . mysqli_error($conectar);
}

// Cerrar la conexión a la base de datos
mysqli_close($conectar);

$enlace = "/RESTAURANTES/Restaurante/admin/admin.html";
?>

<a href="<?php echo $enlace; ?>">
    <button>VOLVER</button>
</a>


</body>
</html>