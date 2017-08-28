<?php echo form_open('ventum/edit/'.$ventum['id_venta'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_cliente_venta" class="col-md-4 control-label"><span class="text-danger">*</span>Persona</label>
		<div class="col-md-8">
			<select name="id_cliente_venta" class="form-control">
				<option value="">select persona</option>
				<?php 
				foreach($all_personas as $persona)
				{
					$selected = ($persona['id_persona'] == $ventum['id_cliente_venta']) ? ' selected="selected"' : "";

					echo '<option value="'.$persona['id_persona'].'" '.$selected.'>'.$persona['nombre_persona'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('id_cliente_venta');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="id_productos_venta" class="col-md-4 control-label"><span class="text-danger">*</span>Producto</label>
		<div class="col-md-8">
			<select name="id_productos_venta" class="form-control">
				<option value="">select producto</option>
				<?php 
				foreach($all_producto as $producto)
				{
					$selected = ($producto['id_producto'] == $ventum['id_productos_venta']) ? ' selected="selected"' : "";

					echo '<option value="'.$producto['id_producto'].'" '.$selected.'>'.$producto['nombre_producto'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('id_productos_venta');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="hora_venta" class="col-md-4 control-label">Hora Venta</label>
		<div class="col-md-8">
			<input type="text" name="hora_venta" value="<?php echo ($this->input->post('hora_venta') ? $this->input->post('hora_venta') : $ventum['hora_venta']); ?>" class="form-control" id="hora_venta" />
		</div>
	</div>
	<div class="form-group">
		<label for="fecha_venta" class="col-md-4 control-label">Fecha Venta</label>
		<div class="col-md-8">
			<input type="text" name="fecha_venta" value="<?php echo ($this->input->post('fecha_venta') ? $this->input->post('fecha_venta') : $ventum['fecha_venta']); ?>" class="form-control" id="fecha_venta" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>