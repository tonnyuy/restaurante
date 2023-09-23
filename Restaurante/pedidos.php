<?php
require 'conexion.php';
// Verifica la conexión
if ($conectar->connect_error) {
    die("Conexión fallida: " . $conectar->connect_error);
}

// Obtiene el número del formulario
$idmenu= rand(1, 100);
$plato= $_POST['plato'];
$descripcion = $_POST['desc'];
$precio =$_POST['precio'];
$cantidad = $_POST['cantidad'];
$preciofinal = $precio * $cantidad;
$fecha = date("Y-m-d H:i:s");

// Inserta el número en la base de datos
$sql = "INSERT INTO menu (menu_id, nombre_plato, descripcion, precio, cantidad, estado, fecha) VALUES ('$idmenu', '$plato','$descripcion',$precio,'$cantidad','pendiente','$fecha')";

if ($conectar->query($sql) === TRUE) {
    echo "pedido insertado correctamente.";
} else {
    echo "Error al insertar pedido: " . $conectar->error;
}

// Cierra la conexión
$conectar->close();
?>
