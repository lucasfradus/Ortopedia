<?php echo form_open('ventum/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_cliente_venta" class="col-md-4 control-label">Id Cliente Venta</label>
		<div class="col-md-8">
			<input type="text" name="id_cliente_venta" value="<?php echo $this->input->post('id_cliente_venta'); ?>" class="form-control" id="id_cliente_venta" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_productos_venta" class="col-md-4 control-label">Id Productos Venta</label>
		<div class="col-md-8">
			<input type="text" name="id_productos_venta" value="<?php echo $this->input->post('id_productos_venta'); ?>" class="form-control" id="id_productos_venta" />
		</div>
	</div>
	<div class="form-group">
		<label for="hora_venta" class="col-md-4 control-label">Hora Venta</label>
		<div class="col-md-8">
			<input type="text" name="hora_venta" value="<?php echo $this->input->post('hora_venta'); ?>" class="form-control" id="hora_venta" />
		</div>
	</div>
	<div class="form-group">
		<label for="fecha_venta" class="col-md-4 control-label">Fecha Venta</label>
		<div class="col-md-8">
			<input type="text" name="fecha_venta" value="<?php echo $this->input->post('fecha_venta'); ?>" class="form-control" id="fecha_venta" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>