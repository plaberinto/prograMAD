<?php
$config = require '/../conf/propiedadesBD.php';

class GanemosPDO extends PDO {
	
	public function GanemosPDO(){
		global $config;
		parent::__construct($config['cadenaConexionBd'], $config['usuarioBd'], $config['contraseniaBd']);
		//parent::setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		parent::setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
	}
}