<<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<div class="box-principal"></div>
<h3 class="titulo">Listado de Administradores</h3>
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Listado de Administradores</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Usuario</th>
                    <th>Contrasena</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                while($row = mysqli_fetch_array($datos))
                { 
                ?>
                    <tr>
                        <td><?php echo $row['id_admin']; ?></td>
                        <td><?php echo $row['usuario']; ?></td>
                        <td><?php echo $row['contrasena']; ?></td>
                        <td><a class="btn btn-warning" href="<?php echo URL; ?>administrador_plataforma/editar/<?php echo $row['id_admin']; ?>">Editar</a>
                            <a class="btn btn-danger" href="<?php echo URL; ?>administrador_plataforma/eliminar/<?php echo $row['id_admin']; ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php 
                } 
            ?>
            </tbody>
        </table>
    </div>
</div>