<?php
require_once 'conexion.class.php';
 

Function __UsuariosRegistrados(){
$conexion = Conexion::singleton_conexion();
$sql = 'SELECT * FROM usuarios';
$stmt = $conexion->prepare($sql);
$results = $stmt->execute();
$rows = $stmt->fetchAll();
$error = $stmt->errorInfo();
if(empty($rows)) {
		echo "<option>";
			echo "No hay usuarios registrados.";
		echo "</option>";
	}
	else {

		return $rows;
		foreach ($rows as $row) {

				echo "<p class='usuariosregistrados'>".$row['nombre']."</p>";


	}

   }
}

?>