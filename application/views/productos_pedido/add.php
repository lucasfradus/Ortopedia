<?php echo form_open('productos_pedido/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_pedido" class="col-md-4 control-label">Id Pedido</label>
		<div class="col-md-8">
			<input type="text" name="id_pedido" value="<?php echo $this->input->post('id_pedido'); ?>" class="form-control" id="id_pedido" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_producto" class="col-md-4 control-label">Id Producto</label>
		<div class="col-md-8">
			<input type="text" name="id_producto" value="<?php echo $this->input->post('id_producto'); ?>" class="form-control" id="id_producto" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>