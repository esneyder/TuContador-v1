<?php

include '/../../connection/Conexion.php';

$prueba = new CrudPrincipalSlider();

echo $prueba->InsertedSlider('https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/7/005/03e/2aa/2b2a855.jpg','3','3','Prueba Inserted');

class CrudPrincipalSlider 
{
	public function InsertedSlider($imagen, $titulo, $subtitulo, $texto)
	{

		$Conexion = new Conexion();
		
		try{
			$cmd = $Conexion->Conectar();

			$cmd->prepare('INSERT INTO principal (slider, titulo, subtitulo, texto, fecha) 
														VALUES (:slider, :titulo, :subtitulo, :texto, :fecha)');

			$cmd->bindparam(":slider",$imagen);
			$cmd->bindparam(":titulo",$titulo);
			$cmd->bindparam(":subtitulo",$subtitulo);
			$cmd->bindparam(":texto",$texto);
			$cmd->bindparam(":fecha",date('y-m-d'));

			if ($cmd->execute()) 
			{
				$Conexion->CerrarConexion();
				return true;
			}
		}
		catch(PDOException $e)
		{
		
		}
		$Conexion->CerrarConexion();
		return false;
	}
}

?>