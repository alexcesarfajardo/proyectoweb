<div class="box-principal">
<h3 class="titulo">Editar Sede <?php echo $datos['nombre']; ?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar Sede <?php echo $datos['nombre']; ?> </h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-12">
              <form class="form-horizontal" action="" method="POST">
                <div class="form-group">
                    <label class="control-label">Nombre</label>
                    <input class="form-control" value="<?php echo $datos['nombre']; ?>" type="text" name="nombre" required/>   
                </div>
                <div class="form-group">
                    <label class="control-label">Descripción</label>
                    <input class="form-control" value="<?php echo $datos['descripcion']; ?>" type="text" name="descripcion" required/>
                </div>
                <div class="form-group">
                    <label class="control-label">Ubicacion</label>
                    <input class="form-control" value="<?php echo $datos['ubicacion']; ?>" type="text" name="ubicacion" required/>   
                </div>
                <input value="<?php echo $datos['id_sede']; ?>" name="id_sede" type="hidden" required />
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