<?php echo form_open('producto/edit/'.$producto['id_producto'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nombre_producto" class="col-md-4 control-label">Nombre Producto</label>
		<div class="col-md-8">
			<input type="text" name="nombre_producto" value="<?php echo ($this->input->post('nombre_producto') ? $this->input->post('nombre_producto') : $producto['nombre_producto']); ?>" class="form-control" id="nombre_producto" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_proveedor_producto" class="col-md-4 control-label">Id Proveedor Producto</label>
		<div class="col-md-8">
			<input type="text" name="id_proveedor_producto" value="<?php echo ($this->input->post('id_proveedor_producto') ? $this->input->post('id_proveedor_producto') : $producto['id_proveedor_producto']); ?>" class="form-control" id="id_proveedor_producto" />
		</div>
	</div>
	<div class="form-group">
		<label for="precio_compra_producto" class="col-md-4 control-label">Precio Compra Producto</label>
		<div class="col-md-8">
			<input type="text" name="precio_compra_producto" value="<?php echo ($this->input->post('precio_compra_producto') ? $this->input->post('precio_compra_producto') : $producto['precio_compra_producto']); ?>" class="form-control" id="precio_compra_producto" />
		</div>
	</div>
	<div class="form-group">
		<label for="precio_venta_producto" class="col-md-4 control-label">Precio Venta Producto</label>
		<div class="col-md-8">
			<input type="text" name="precio_venta_producto" value="<?php echo ($this->input->post('precio_venta_producto') ? $this->input->post('precio_venta_producto') : $producto['precio_venta_producto']); ?>" class="form-control" id="precio_venta_producto" />
		</div>
	</div>
	<div class="form-group">
		<label for="stock_producto" class="col-md-4 control-label">Stock Producto</label>
		<div class="col-md-8">
			<input type="text" name="stock_producto" value="<?php echo ($this->input->post('stock_producto') ? $this->input->post('stock_producto') : $producto['stock_producto']); ?>" class="form-control" id="stock_producto" />
		</div>
	</div>
	<div class="form-group">
		<label for="stock_minimo_producto" class="col-md-4 control-label">Stock Minimo Producto</label>
		<div class="col-md-8">
			<input type="text" name="stock_minimo_producto" value="<?php echo ($this->input->post('stock_minimo_producto') ? $this->input->post('stock_minimo_producto') : $producto['stock_minimo_producto']); ?>" class="form-control" id="stock_minimo_producto" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>