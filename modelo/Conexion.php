<?php namespace modelo;
    class Conexion extends \mysqli
    {
        private $con;
		private $datos = array(
			"host" => "localhost",
			"user" => "root",
			"pass" => "",
			"db" => "proyectoweb"
		);
		
        public function __construct()
        {
			parent::__construct($this->datos['host'], 
				$this->datos['user'], $this->datos['pass'],
                $this->datos['db']);
                $this->set_charset('utf-8');
                $this->connect_errno ? die('Error en la conexion '. \mysqli_connect_errno()): $m = 'CONECTADO';
		}
        public function consultaSimple($sql)
        {
			$this->query($sql);
		}
        public function consultaRetorno($sql)
        {
			$datos = $this->query($sql);
			return $datos;
		}
	}
?>