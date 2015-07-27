<?php

include '/../../connection/Conexion.php';

class GeTSliderPrincipal
{
	
	public function GetSlider()
	{
		$Conexion = new Conexion();

		$cmd= $Conexion->Conectar();

		try
		{
			$arrayName = array();
			$cmd->beginTransaction();

			foreach ($cmd->query('SELECT * FROM principal') as $row)
			 {
			 	$arrayName[$row['id']] = array(	'imagen' => $row['slider'], 
			 							'titulo' => $row['titulo'], 
			 							'subtitulo' => $row['subtitulo'],
			 							 );
			 }

		$Conexion->CerrarConexion();

		return $arrayName;

		}
		catch(Exception $e)
		{

		}

		return $arrayName;

	} 

	}


?>