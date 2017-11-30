<?php namespace modelo;

class Sede extends Conexion
{
    private $id_sede;
    private $nombre;
    private $descripcion;
    private $ubicacion;
    private $conBD;

    public function __contruct()
    {
       $this->conBD = new \modelo\Conexion();
    }

    public function set($atributo, $contenido)
    {
        $this->$atributo = $contenido;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    public function listarSedes()
    {
        $sql = "SELECT * FROM sede";
        $datos = $this->consultaRetorno($sql);
        return $datos;
    }

    public function guardarSede()
    {
        $sql = "INSERT INTO sede(nombre, descripcion, ubicacion) VALUES ('{$this->nombre}','{$this->descripcion}','{$this->ubicacion}')";
        $this->consultaSimple($sql);
    }

    public function editarSede()
    {
        $sql = "UPDATE sede set nombre = '{$this->nombre}' , descripcion = '{$this->descripcion}', ubicacion = '{$this->ubicacion}' WHERE id_sede = '{$this->id_sede}'";
        $this->consultaSimple($sql);
    }

    public function eliminarSede()
    {
        $sql = "DELETE FROM sede WHERE id_sede = '{$this->id_sede}'";
        $this->consultaSimple($sql);
    }

    public function verSedes()
    {
        $sql = "SELECT * FROM sede where id_sede = '{$this->id_sede}' ";
        $datos = $this->consultaRetorno($sql);
        $row = \mysqli_fetch_assoc($datos);
        return $row;
    }
}
