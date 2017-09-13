
<div align="left">
	<div class="btn-group" role="group" aria-label="...">
		 <a href=<?= base_url('Ventum/'); ?> type="button" class="btn btn-default">Volver Atrás</a> 
	</div>
</div>


<!-- Alertas! -->

<div align="center">
<?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Exito!</strong> <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php }else if($this->session->flashdata('error')){  ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php }else if($this->session->flashdata('warning')){  ?>
        <div class="alert alert-warning">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Advertencia!</strong> <?php echo $this->session->flashdata('warning'); ?>
        </div>
    <?php }else if($this->session->flashdata('info')){  ?>
        <div class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
        </div>
    <?php } ?>
</div>
<!-- FIN Alertas! -->
<div class="row well">
	<div align="center">
	<h2>Detalle de Venta</h2>
	<hr>
		
			<div class="row">
				<fieldset class="form-group">
					<div class="col-xs-4">
						<label for="ex1">Id Venta</label>
						<input class="form-control" id="ex1" type="text" value=<?= $ventum['id_venta'] ?> disabled="disabled">
					</div>
						<div class="col-xs-4">
						<label for="ex1">Cliente</label>
						<input class="form-control" id="ex1" type="text" value=<?= $ventum['apellido_persona'].','.$ventum['nombre_persona']; ?> disabled="disabled">
					</div>
						<div class="col-xs-4">
						<label for="ex1">Fecha</label>
						<input class="form-control" id="ex1" type="text" value=<?= $ventum['fecha_venta'] ?> disabled="disabled">
					</div>
						<div class="col-xs-4">
						<label for="ex1">Hora Venta</label>
						<input class="form-control" id="ex1" type="text" value=<?= $ventum['hora_venta'] ?> disabled="disabled">
					</div>
					<div class="col-xs-4">
						<label for="ex1">Vendedor</label>
						<input class="form-control" id="ex1" type="text" value=<?= $ventum['username'] ?> disabled="disabled">
					</div>
				</fieldset>
			</div>
		
	<br><br><br><hr>
<h3>Detalle de Productos</h3>
	<hr>
		<table class="table table-striped table-bordered">
    <tr>
		<th>Id Producto</th>
		<th>Nombre Producto</th>
		<th>Costo Unitario</th>
    </tr>
	<?php foreach($producto as $p){ ?>
    <tr>
		<td><?php echo $p['id_producto']; ?></td>
		<td><?php echo $p['nombre_producto']; ?></td>
		<td><?php echo $p['costo']; ?></td>
    </tr>
	<?php } ?>
	<td class="success"></td>
	<td class="success">Total</td>
	<td class="success"><?php echo $ventum['monto']; ?></td>
</table>



	</div>
</div>