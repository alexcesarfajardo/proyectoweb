<div class="box-principal">
<h3 class="titulo">Editar Admin <?php echo $datos['usuario']; ?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar Admin <?php echo $datos['usuario']; ?> </h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-12">
              <form class="form-horizontal" action="" method="POST">
                <div class="form-group">
                    <label class="control-label">Usuario</label>
                    <input class="form-control" value="<?php echo $datos['usuario']; ?>" type="text" name="usuario" required/>   
                </div>
                <div class="form-group">
                    <label class="control-label">Contrasena</label>
                    <input class="form-control" value="<?php echo $datos['contrasena']; ?>" type="text" name="contrasena" required/>
                </div>
                <input value="<?php echo $datos['id_admin']; ?>" name="id_admin" type="hidden" required />
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Editar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
              </form>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>