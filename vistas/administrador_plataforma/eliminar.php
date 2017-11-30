<div class="box-principal">
<h3 class="titulo">Eliminar Administrador <?php echo $datos['usuario']; ?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Eliminar administrador <?php echo $datos['usuario']; ?> </h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-12">
              <form class="form-horizontal" action="" method="POST">
                <div class="form-group">
                    <label class="control-label">usuario</label>
                    <input class="form-control" value="<?php echo $datos['usuario']; ?>" type="text" name="usuario" required disabled/>   
                </div>
                <div class="form-group">
                    <label class="control-label">contrasena</label>
                    <input class="form-control" value="<?php echo $datos['contrasena']; ?>" type="text" name="contrasena" required disabled/>
                </div>
                <input value="<?php echo $datos['id_admin']; ?>" name="id_admin" type="hidden" required />
                <div class="form-group">
                    <button type="submit" class="btn btn-success">¿Está seguro de eliminar este administrador?</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
              </form>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>