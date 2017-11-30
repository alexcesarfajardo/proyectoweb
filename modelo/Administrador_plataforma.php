<?php namespace modelo;

class Administrador_plataforma extends Conexion
{
    private $id_admin;
    private $usuario;
    private $contrasena;
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

    public function listarAdmins()
    {
        $sql = "SELECT * FROM administrador_plataforma";
        $datos = $this->consultaRetorno($sql);
        return $datos;
    }

    public function guardarAdmin()
    {
        $sql = "INSERT INTO administrador_plataforma(usuario, contrasena) VALUES ('{$this->usuario}','{$this->contrasena}')";
        $this->consultaSimple($sql);
    }

    public function editarAdmin()
    {
        $sql = "UPDATE administrador_plataforma set usuario = '{$this->usuario}' , contrasena = '{$this->contrasena}' WHERE id_admin = '{$this->id_admin}'";
        $this->consultaSimple($sql);
    }

    public function eliminarAdmin()
    {
        $sql = "DELETE FROM administrador_plataforma WHERE id_admin = '{$this->id_admin}'";
        $this->consultaSimple($sql);
    }

    public function verAdmin()
    {
        $sql = "SELECT * FROM administrador_plataforma where id_admin = '{$this->id_admin}' ";
        $datos = $this->consultaRetorno($sql);
        $row = \mysqli_fetch_assoc($datos);
        return $row;
    }
}
