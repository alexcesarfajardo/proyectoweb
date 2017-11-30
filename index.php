<?php 
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', realpath(dirname(__FILE__)) . DS);
    //CONSTANTE PARA LLAMAR ARCHIVOS EXTERNOS
    define('URL', "http://localhost:8080/proyectoweb/");

    require_once "config/Autoload.php";
    Config\Autoload::run();
    require_once "vistas/template.php";
    \Config\Enrutador::run(new \Config\Request());
?>