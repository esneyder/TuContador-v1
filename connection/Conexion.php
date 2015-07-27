<?php

class Conexion
{
	public $mbd;
	
	public function Conectar()
		{

			try {
			    $this->mbd = new PDO('mysql:host=db4free.net;dbname=tucontador', 'tucontador', 'tucontador');
			    $this->mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
			    print "¡Error!: " . $e->getMessage() . "<br/>";
			    die();
			}
			return $this->mbd;
		}

		public function CerrarConexion()
		{
			$this->mbd=null;
		}
}

?>