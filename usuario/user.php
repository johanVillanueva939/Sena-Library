<?php
include('../pages/sesion.php');
include("../conexion/conexion.php");


//Recibimos las variables enviadas
$id_user = (isset($_POST['C.C'])) ? $_POST['C.C'] : "";
$Nombre = (isset($_POST['Nombre'])) ? $_POST['Nombre'] : "";
$Email = (isset($_POST['E-mail'])) ? $_POST['E-mail'] : "";
$Contraseña = (isset($_POST['Contraseña'])) ? $_POST['Contraseña'] : "";
$Telefono = (isset($_POST['Telefono'])) ? $_POST['Telefono'] : "";

				$insercionClientes = $conn->prepare(
				"INSERT INTO user (C.C, Nombre, Email, Contraseña, Telefono) 
				VALUES ('$id_user','$Nombre','$Email','$Contraseña','$Telefono')"
			);
?>