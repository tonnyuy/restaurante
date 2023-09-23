<?php
$id=$_POST['id'];
$tipo=$_POST['tipo_usuario'];

session_start();
$_SESSION['id']=$id;

$conectar=mysqli_connect("localhost","root","","prueba");

$consulta="SELECT*FROM usuarios where usuario_id='$id' and tipo_usuario='$tipo'";
$resultado=mysqli_query($conectar,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
  
  if ($tipo == "admin") {

    echo "<script>alert('¡Bienvenido administrador!');</script>";
      echo "<script>location.href = '/RESTAURANTES/Restaurante/admin/admin.html';</script>";
  } elseif ($tipo == "cliente") {
    echo "<script>alert('¡Bienvenido!');</script>";
      echo "<script>location.href = '/RESTAURANTES/Restaurante/index.html';</script>";
  }
}else{
    ?>
    <?php
    include("entrada.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conectar);
