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
			 	$ubicacion='';
			 	
							switch ($row['location']) {
								case 'a'://Superior Izquierda
									$ubicacion="met_thumbnail_slider_1_effects met_thumbnail_slider_1_effects_left met_thumbnail_slider_1_top";
									break;
								case 'b': //Superior Derecha
									$ubicacion="met_thumbnail_slider_1_effects met_thumbnail_slider_1_effects_right met_thumbnail_slider_1_top";
									break;
								case 'c'://Inferior Izquierda
									$ubicacion="met_thumbnail_slider_1_effects met_thumbnail_slider_1_effects_left met_thumbnail_slider_1_bottom";
									break;
								case 'd'://Inferior Derecha
									$ubicacion="met_thumbnail_slider_1_effects met_thumbnail_slider_1_effects_right met_thumbnail_slider_1_bottom";
									break;
								default:
									$ubicacion="met_thumbnail_slider_1_effects met_thumbnail_slider_1_effects_left met_thumbnail_slider_1_top";
									break;
							}
			 	$arrayName[$row['id']] = array(	'imagen' => $row['slider'], 
			 							'titulo' => $row['titulo'], 
			 							'subtitulo' => $row['subtitulo'],
			 							'location' => $row['location'],
			 							'ubicacion'=>$ubicacion
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