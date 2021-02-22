<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$cargo=$_POST['cargo'];
$descripcion=$_POST['descripcion'];
$generacion=$_POST['generacion'];

$query="INSERT INTO usuaios(nombre,apellido,correo,telefono,cargo,descripcion,generacion) 
VALUES('$nombre','$apellido','$correo','$telefono','$cargo','$descripcion','$generacion')";

$result=$conexion->query($query);

if ($result) {
	header("location:index.php");
}
else{
	echo "ayyy";
}

?>