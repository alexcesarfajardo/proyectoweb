<?php 

    namespace controlador;

    use modelo\Sede as Sede;

    class SedeController
    {
        private $sede;

        public function __construct()
        {
            $this->sede = new Sede();
        }

        public function index()
        {
            $datos = $this->sede->listarSedes();
            return $datos;
        }

        public function agregar()
        {
            if(!$_POST)
            {
                $datos = $this->sede->listarSedes();
            }
            else
            {
                $this->sede->set("nombre", $_POST["nombre"]);
                $this->sede->set("descripcion", $_POST['descripcion']);
                $this->sede->set("ubicacion", $_POST['ubicacion']);
                $this->sede->guardarSede();
                header("Location: ". URL . "sede");
            }
        }

        public function editar($id_sede)
        {
            if(!$_POST)
            {
                $this->sede->set("id_sede", $id_sede);
                $datos = $this->sede->verSede();
                return $datos;
            }
            else
            {
                $this->sede->set("id_sede", $_POST['id_sede']);
                $this->sede->set("nombre", $_POST['nombre']);
                $this->sede->set("descripcion", $_POST['descripcion']);
                $this->sede->set("ubicacion", $_POST['ubicacion']);
                $this->sede->editarSede();
                header("Location: ". URL . "sede");
            }
        }

        public function eliminar($id_sede)
        {
            if(!$_POST)
            {
                $this->sede->set("id_sede", $id_sede);
                $datos = $this->sede->verSede();
                return $datos;
            }
            else
            {
                $this->sede->set("id_sede", $_POST['id_sede']);
                $this->sede->eliminarSede();
                header("Location: ". URL . "sede");
            }
        }
    }
?>