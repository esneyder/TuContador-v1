<?php

include '/../../connection/Conexion.php';

class PrincipalSlider()
{
	private $id;
	private $titulo;
	private $subtitulo;
	private $imagen;
	private $texto;
	private $ubicacion;
	private $fecha

	public function SetId($id){
		$this->id=$id;
	}

	public function SetTitulo($titulo){
		$this->titulo=$titulo;
	}
	
	public function SetSubtitulo($subtitulo){
		$this->subtitulo=$subtitulo;
	}
	
	public function SetImagen($imagen){
		$this->imagen=$imagen;
	}
	
	public function SetText($texto){
		$this->texto=$texto;
	}
	
	public function SetUbicacion($ubicacion){
		$this->ubicacion=$ubicacion;
	}

	public function SetFecha($fecha){
		$this->fecha=$fecha;
	}

	public function GetId(){
		return $this->id;
	}

	public function GetTitulo(){
		return $this->titulo;
	}

	public function GetSubtitulo(){
		return $this->subtitulo;
	}

	public function GetImagen(){
		return $this->imagen;
	}

	public function GetTexto(){
		return $this->texto;
	}

	public function GetUbicacion(){
		return $this->ubicacion;
	}

	public function GetFecha(){
		return $this->fecha;
	}


}

class CrudPrincipalSlider 
{

	public function InsertedSlider(PrincipalSlider $data)
	{	
		$fecha=date('y-m-d');
		$Conexion = new Conexion();
		
		try{
			$con = $Conexion->Conectar();

			$cmd=$con->prepare('INSERT INTO principal (slider, titulo, subtitulo, texto, location, fecha) 
														VALUES (:slider, :titulo, :subtitulo, :texto, :location, :fecha)');

			$cmd->bindparam(":slider",$data->GetImagen());
			$cmd->bindparam(":titulo",$data->GetTitulo());
			$cmd->bindparam(":subtitulo",$data->GetSubtitulo());
			$cmd->bindparam(":texto",$data->GetTexto());
			$cmd->bindparam(":location",$data->GetUbicacion());
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

	public function ActualizarSlider(PrincipalSlider $data)
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
			$cmd->bindparam(":slider",$data->GetImagen());
			$cmd->bindparam(":titulo",$data->GetTitulo());
			$cmd->bindparam(":subtitulo",$data->GetSubtitulo());
			$cmd->bindparam(":texto",$data->GetTexto());
			$cmd->bindparam(":location",$data->GetUbicacion());
			$cmd->bindparam(":id",$data->GetId());

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