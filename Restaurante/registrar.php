<?php
require 'conexion.php';
$primary = $_POST['id'];
 $nombre  = $_POST['nombre'];
 $apellido  = $_POST['apellido'];
 $tipo = $_POST['tipo_usuario'];

$insertar = "INSERT INTO usuarios  VALUES ('$primary','$nombre','$apellido','$tipo') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('usuario registrado correctamente!');
    location.href = '/RESTAURANTES/Restaurante/LOGGIN/entrada.html';
   </script>";

}else{
    echo "<script> alert('error de registro');
    location.href = '/RESTAURANTES/Restaurante/index.html';
    </script>";
}

?>