<?php namespace Views;

    $template = new Template();
    
class Template
{
    public function __construct()
    {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>NITLAPAN</title>
    <link rel="stylesheet" href="<?php echo URL; ?>vistas/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>vistas/css/general.css"
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
      <span class="sr-only"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Administración</a>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
    <ul class="nav navbar-nav">
      <li><a href="<?php echo URL; ?>">Inicio</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administradores Plataforma <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="<?php echo URL; ?>administrador_plataforma">Listado</a></li>
          <li><a href="<?php echo URL; ?>administrador_plataforma/agregar">Agregar</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sedes <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="<?php echo URL; ?>sede">Listado</a></li>
          <li><a href="<?php echo URL; ?>sede/agregar">Agregar</a></li>
        </ul>
      </li>
      <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jefes de AT <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="<?php echo URL; ?>jefesat">Listado</a></li>
        <li><a href="<?php echo URL; ?>jefesat/agregar">Agregar</a></li>
      </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Oficiales de AT <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="<?php echo URL; ?>oficialat">Listado</a></li>
          <li><a href="<?php echo URL; ?>oficialat/agregar">Agregar</a></li>
        </ul>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">UCA</a></li>
    </ul>
  </div>
</div>
</nav>
<?php
    }
    public function __destruct()
    {

?>

<footer class="navbar-fixed-bottom">
  Todos los derechos reservados &copy 2017 <br>
  <b>Desarrollo de Aplicaciones Web</b> <br>
  <b>SquadDev -1</b>
</footer>
<script src="<?php echo URL; ?>vistas/js/jquery-3.2.1.js"></script>
<script src="<?php echo URL; ?>vistas/js/bootstrap.js"></script>
</body>
</html>
<?php
    }
}

?>
