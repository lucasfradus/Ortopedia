<?php echo form_open('persona/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="tipo_persona" class="col-md-4 control-label">Tipo Persona</label>
		<div class="col-md-8">
			<select name="tipo_persona" class="form-control">
				<option value="">select tipo_persona</option>
				<?php 
				foreach($all_tipo_persona as $tipo_persona)
				{
					$selected = ($tipo_persona['id_tipo_persona'] == $this->input->post('tipo_persona')) ? ' selected="selected"' : "";

					echo '<option value="'.$tipo_persona['id_tipo_persona'].'" '.$selected.'>'.$tipo_persona['nombre_tipo_persona'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="dni_persona" class="col-md-4 control-label"><span class="text-danger">*</span>Dni Persona</label>
		<div class="col-md-8">
			<input type="text" name="dni_persona" value="<?php echo $this->input->post('dni_persona'); ?>" class="form-control" id="dni_persona" />
			<span class="text-danger"><?php echo form_error('dni_persona');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="nombre_persona" class="col-md-4 control-label"><span class="text-danger">*</span>Nombre Persona</label>
		<div class="col-md-8">
			<input type="text" name="nombre_persona" value="<?php echo $this->input->post('nombre_persona'); ?>" class="form-control" id="nombre_persona" />
			<span class="text-danger"><?php echo form_error('nombre_persona');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="apellido_persona" class="col-md-4 control-label"><span class="text-danger">*</span>Apellido Persona</label>
		<div class="col-md-8">
			<input type="text" name="apellido_persona" value="<?php echo $this->input->post('apellido_persona'); ?>" class="form-control" id="apellido_persona" />
			<span class="text-danger"><?php echo form_error('apellido_persona');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="fecha_nac_persona" class="col-md-4 control-label">Fecha Nac Persona</label>
		<div class="col-md-8">
			<input type="text" name="fecha_nac_persona" value="<?php echo $this->input->post('fecha_nac_persona'); ?>" class="form-control" id="fecha_nac_persona" />
		</div>
	</div>
	<div class="form-group">
		<label for="tel_persona" class="col-md-4 control-label"><span class="text-danger">*</span>Tel Persona</label>
		<div class="col-md-8">
			<input type="text" name="tel_persona" value="<?php echo $this->input->post('tel_persona'); ?>" class="form-control" id="tel_persona" />
			<span class="text-danger"><?php echo form_error('tel_persona');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="domiciolio_persona" class="col-md-4 control-label">Domiciolio Persona</label>
		<div class="col-md-8">
			<input type="text" name="domiciolio_persona" value="<?php echo $this->input->post('domiciolio_persona'); ?>" class="form-control" id="domiciolio_persona" />
		</div>
	</div>
	<div class="form-group">
		<label for="cp_persona" class="col-md-4 control-label">Cp Persona</label>
		<div class="col-md-8">
			<input type="text" name="cp_persona" value="<?php echo $this->input->post('cp_persona'); ?>" class="form-control" id="cp_persona" />
		</div>
	</div>
	<div class="form-group">
		<label for="mail_persona" class="col-md-4 control-label"><span class="text-danger">*</span>Mail Persona</label>
		<div class="col-md-8">
			<input type="text" name="mail_persona" value="<?php echo $this->input->post('mail_persona'); ?>" class="form-control" id="mail_persona" />
			<span class="text-danger"><?php echo form_error('mail_persona');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="razon_social_persona" class="col-md-4 control-label">Razon Social Persona</label>
		<div class="col-md-8">
			<input type="text" name="razon_social_persona" value="<?php echo $this->input->post('razon_social_persona'); ?>" class="form-control" id="razon_social_persona" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>