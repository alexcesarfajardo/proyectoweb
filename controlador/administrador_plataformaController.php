<?php 

    namespace controlador;

    use modelo\Administrador_plataforma as Administrador_plataforma;

    class Administrador_plataformaController
    {
        private $administrador_plataforma;

        public function __construct()
        {
            $this->administrador_plataforma = new Administrador_plataforma();
        }

        public function index()
        {
            $datos = $this->administrador_plataforma->listarAdmins();
            return $datos;
        }

        public function agregar()
        {
            if(!$_POST)
            {
                $datos = $this->administrador_plataforma->listarAdmins();
            }
            else
            {
                $this->administrador_plataforma->set("usuario", $_POST["usuario"]);
                $this->administrador_plataforma->set("contrasena", $_POST['contrasena']);
                $this->administrador_plataforma->guardarAdmin();
                header("Location: ". URL . "administrador_plataforma");
            }
        }

        public function editar($id_admin)
        {
            if(!$_POST)
            {
                $this->administrador_plataforma->set("id_admin", $id_admin);
                $datos = $this->administrador_plataforma->verAdmin();
                return $datos;
            }
            else
            {
                $this->administrador_plataforma->set("id_admin", $_POST['id_admin']);
                $this->administrador_plataforma->set("usuario", $_POST['usuario']);
                $this->administrador_plataforma->set("contrasena", $_POST['contrasena']);
                $this->administrador_plataforma->editarAdmin();
                header("Location: ". URL . "administrador_plataforma");
            }
        }

        public function eliminar($id_admin)
        {
            if(!$_POST)
            {
                $this->administrador_plataforma->set("id_admin", $id_admin);
                $datos = $this->administrador_plataforma->verAdmin();
                return $datos;
            }
            else
            {
                $this->administrador_plataforma->set("id_admin", $_POST['id_admin']);
                $this->administrador_plataforma->eliminarAdmin();
                header("Location: ". URL . "administrador_plataforma");
            }
        }
    }
?>