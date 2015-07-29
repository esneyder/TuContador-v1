<?php

class Conexion
{
	public $mbd;
	
	public function Conectar()
		{

			try {
				$opciones = array(
                          PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                       ); 
			    $this->mbd = new PDO('mysql:host=50.62.209.74:3306;dbname=admon10_tucontador', 
			    	'tucontador2015', 'BDtucontador2015',$opciones);
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