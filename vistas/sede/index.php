<div class="box-principal"></div>
<h3 class="titulo">Listado de Sedes</h3>
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Listado de Sedes</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Ubicacion</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                while($row = mysqli_fetch_array($datos))
                { 
                ?>
                    <tr>
                        <td><?php echo $row['id_sede']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['descripcion']; ?></td>
                        <td><?php echo $row['ubicacion']; ?></td>
                        <td><a class="btn btn-warning" href="<?php echo URL; ?>sede/editar/<?php echo $row['id_sede']; ?>">Editar</a>
                            <a class="btn btn-danger" href="<?php echo URL; ?>sede/eliminar/<?php echo $row['id_sede']; ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php 
                } 
            ?>
            </tbody>
        </table>
    </div>
</div>