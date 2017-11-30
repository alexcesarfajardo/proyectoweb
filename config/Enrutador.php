<?php namespace Config;

    class Enrutador
    {
        public static function run(Request $request)
        {
            $controlador = $request->getControlador() . "Controller";
            //print $controlador;

            $ruta = ROOT . "controlador" . DS . $controlador . ".php";
            //print $ruta;

             $metodo = $request->getMetodo();
             if($metodo == "index.php")
             {
                 $metodo = "index";
             }

             if($metodo == "agregar.php")
             {
                 $metodo = "cargarSelectC";
             }

            $argumento = $request->getArgumento();
            if(\is_readable($ruta))
            {
                require_once $ruta;
                $mostrar = "controlador\\" . $controlador;
                $controlador = new $mostrar;
                if(!isset($argumento))
                {
                    $datos = \call_user_func(array($controlador, $metodo));
                }
                else
                {
                    $datos = \call_user_func_array(array($controlador, $metodo), $argumento);
                }
            }

            //Cargar Vista
            $ruta = ROOT . "vistas" . DS . $request->getControlador() . DS . $request->getMetodo() . ".php";
            if(\is_readable($ruta))
            {
                require_once $ruta;
            }
            else
            {
                print "No se encontró la ruta";
            }

        }
    }
?>