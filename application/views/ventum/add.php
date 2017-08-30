


<?php echo form_open('ventum/add',array("class"=>"form-horizontal")); ?>
<div class="row well">
	<div align="center">
	<div class="form-group">
		<label for="id_cliente_venta" class="col-md-4 control-label"><span class="text-danger">*</span>Cliente</label>
		<div class="col-xs-3">
			<select name="id_cliente_venta" class="form-control">
				<option value="">select persona</option>
				<?php 
				foreach($all_personas as $persona)
				{
					$selected = ($persona['id_persona'] == $this->input->post('id_cliente_venta')) ? ' selected="selected"' : "";

					echo '<option value="'.$persona['id_persona'].'" '.$selected.'>'.$persona['apellido_persona'].', '.$persona['nombre_persona'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('id_cliente_venta');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="id_productos_venta" class="col-md-4 control-label"><span class="text-danger">*</span>Producto</label>
		<div class="col-xs-3">
			<select name="id_productos_venta[]" class="selectpicker" data-live-search="true"  multiple>
				<option value="">select producto</option>
				<?php 
				foreach($all_producto as $producto)
				{
					$selected = ($producto['id_producto'] == $this->input->post('id_productos_venta')) ? ' selected="selected"' : "";

					//aca cheqeo si el producto tiene stock, si no tiene lo deshabilito para que no lo vendan
					$disabled = ($producto['stock_producto'] == 0) ? 'disabled' : "";	

					echo '<option '.$disabled.' value="'.$producto['id_producto'].'" '.$selected.'>'.$producto['nombre_producto'].'-'.$producto['precio_venta_producto'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('id_productos_venta');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	</div>
	</div>

<?php echo form_close(); ?>




