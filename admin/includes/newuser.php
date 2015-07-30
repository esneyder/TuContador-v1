<?php
require_once 'conexion.class.php';
$conexion = Conexion::singleton_conexion();
$normalpass = $_POST['password'];
$hash = sha1($normalpass);
$perfil="";
$permiso="Usuario";
$region="";
$estado="";
$sql = "INSERT INTO usuarios (nombre,perfil,email,password,permiso,region,estado) 
VALUES (:nombre,:perfil,:email,:password,:permiso,:region,:estado)";
$q = $conexion->prepare($sql);
$q->bindParam(':nombre', $_POST['nombre'], PDO::PARAM_STR);
$q->bindParam(':perfil', $perfil, PDO::PARAM_STR);
$q->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
$q->bindParam(':password', $hash, PDO::PARAM_STR);
$q->bindParam(':permiso', $permiso, PDO::PARAM_STR);
$q->bindParam(':region', $region, PDO::PARAM_STR);
$q->bindParam(':estado', $estado, PDO::PARAM_STR);
$q->execute();
header("location: ../index.php")
?>