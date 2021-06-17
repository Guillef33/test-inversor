<?php


$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
session_start();
$_SESSION['usuario']= $usuario;

$conexion = mysqli_connect('localhost', 'root', '', 'login');

$consulta="SELECT*FROM login where usuario='$usuario' and contrasena='$contrasena'";
$resultado = mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);


if ($filas) {
    header("location:home.php");
}else {
    ?>
    <?php
    include('index.php');
    ?>
    <h1>ERROR EN LA AUTENTIFICACION</h1>
    <?php 
}



mysqli_free_result($resultado);
mysqli_close($conexion);














?>