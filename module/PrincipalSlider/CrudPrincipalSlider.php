<?php

include '/../../connection/Conexion.php';

class CrudPrincipalSlider 
{
	public function InsertedSlider($imagen, $titulo, $subtitulo, $texto, $ubicacion)
	{	
		$fecha=date('y-m-d');
		$Conexion = new Conexion();
		
		try{
			$con = $Conexion->Conectar();

			$cmd=$con->prepare('INSERT INTO principal (slider, titulo, subtitulo, texto, location, fecha) 
														VALUES (:slider, :titulo, :subtitulo, :texto, :location, :fecha)');

			$cmd->bindparam(":slider",$imagen);
			$cmd->bindparam(":titulo",$titulo);
			$cmd->bindparam(":subtitulo",$subtitulo);
			$cmd->bindparam(":texto",$texto);
			$cmd->bindparam(":location",$ubicacion);
			$cmd->bindparam(":fecha",$fecha);

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

	public function ActualizarSlider($id, $imagen, $titulo, $subtitulo, $texto, $ubicacion)
	{	
		$Conexion = new Conexion();
		
		try{
			$con = $Conexion->Conectar();

			$cmd=$con->prepare('UPDATE principal SET slider=:slider, 
													titulo=:titulo, 
													subtitulo=:subtitulo,
													texto=:texto,
													location=:location 
												WHERE id=:id');

			$cmd->bindparam(":slider",$imagen);
			$cmd->bindparam(":titulo",$titulo);
			$cmd->bindparam(":subtitulo",$subtitulo);
			$cmd->bindparam(":texto",$texto);
			$cmd->bindparam(":location",$ubicacion);
			$cmd->bindparam(":id",$id);

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

	public function DeleteSlider($id)
	{
		$Conexion = new Conexion();
		try {
			$con = $Conexion->Conectar();
			$cmd = $con->prepare("DELETE FROM principal WHERE id=:id");
			$cmd->bindparam(":id",$id);
			$cmd->execute();
			return true;
		} 
		catch (Exception $e) 
		{
			
		}

		return false;
	}
}

?>