<?php echo form_open('tipo_persona/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nombre_tipo_persona" class="col-md-4 control-label">Nombre Tipo Persona</label>
		<div class="col-md-8">
			<input type="text" name="nombre_tipo_persona" value="<?php echo $this->input->post('nombre_tipo_persona'); ?>" class="form-control" id="nombre_tipo_persona" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>