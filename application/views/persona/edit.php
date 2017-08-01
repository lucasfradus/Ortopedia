<?php echo form_open('persona/edit/'.$persona['id_persona'],array("class"=>"form-horizontal")); ?>

<div align="center">
			 <h2><?= lang('cli_edit_user_tittle') ?> </h2>
	</div> 

<input type="hidden" name="tipo_persona" value="<?= $id ?>">

	<!--
	<div class="form-group">
		<label for="tipo_persona" class="col-md-4 control-label">Tipo Persona</label>
		<div class="col-md-8">
			<select name="tipo_persona" class="form-control">
				<option value="">select tipo_persona</option>
				<?php 
				foreach($all_tipo_persona as $tipo_persona)
				{
					$selected = ($tipo_persona['id_tipo_persona'] == $persona['tipo_persona']) ? ' selected="selected"' : "";

					echo '<option value="'.$tipo_persona['id_tipo_persona'].'" '.$selected.'>'.$tipo_persona['nombre_tipo_persona'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	-->
	<div class="form-group">
		<label for="dni_persona" class="col-md-4 control-label"><span class="text-danger">*</span>Dni Persona</label>
		<div class="col-md-8">
			<input type="text" name="dni_persona" value="<?php echo ($this->input->post('dni_persona') ? $this->input->post('dni_persona') : $persona['dni_persona']); ?>" class="form-control" id="dni_persona" />
			<span class="text-danger"><?php echo form_error('dni_persona');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="nombre_persona" class="col-md-4 control-label"><span class="text-danger">*</span>Nombre Persona</label>
		<div class="col-md-8">
			<input type="text" name="nombre_persona" value="<?php echo ($this->input->post('nombre_persona') ? $this->input->post('nombre_persona') : $persona['nombre_persona']); ?>" class="form-control" id="nombre_persona" />
			<span class="text-danger"><?php echo form_error('nombre_persona');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="apellido_persona" class="col-md-4 control-label"><span class="text-danger">*</span>Apellido Persona</label>
		<div class="col-md-8">
			<input type="text" name="apellido_persona" value="<?php echo ($this->input->post('apellido_persona') ? $this->input->post('apellido_persona') : $persona['apellido_persona']); ?>" class="form-control" id="apellido_persona" />
			<span class="text-danger"><?php echo form_error('apellido_persona');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="fecha_nac_persona" class="col-md-4 control-label">Fecha Nac Persona</label>
		<div class="col-md-8">

		<input class="form-control" type="date" name="fecha_nac_persona" value="<?php echo ($this->input->post('fecha_nac_persona') ? $this->input->post('fecha_nac_persona') : $persona['fecha_nac_persona']); ?>" id="fecha_nac_persona" />
					<script>
					if (!Modernizr.touch || !Modernizr.inputtypes.date) {
					$('input[type=date]')
					.attr('type', 'text')
					.datepicker({
						dateFormat: 'dd-mm-yy'
					});
					}
					</script>
					<span class="text-danger"><?php echo form_error('fecha_nac_persona');?></span>




			
		</div>
	</div>
	<div class="form-group">
		<label for="tel_persona" class="col-md-4 control-label"><span class="text-danger">*</span>Tel Persona</label>
		<div class="col-md-8">
			<input type="text" name="tel_persona" value="<?php echo ($this->input->post('tel_persona') ? $this->input->post('tel_persona') : $persona['tel_persona']); ?>" class="form-control" id="tel_persona" />
			<span class="text-danger"><?php echo form_error('tel_persona');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="domiciolio_persona" class="col-md-4 control-label">Domiciolio Persona</label>
		<div class="col-md-8">
			<input type="text" name="domiciolio_persona" value="<?php echo ($this->input->post('domiciolio_persona') ? $this->input->post('domiciolio_persona') : $persona['domiciolio_persona']); ?>" class="form-control" id="domiciolio_persona" />
		</div>
	</div>
	<div class="form-group">
		<label for="cp_persona" class="col-md-4 control-label">Cp Persona</label>
		<div class="col-md-8">
			<input type="text" name="cp_persona" value="<?php echo ($this->input->post('cp_persona') ? $this->input->post('cp_persona') : $persona['cp_persona']); ?>" class="form-control" id="cp_persona" />
		</div>
	</div>
	<div class="form-group">
		<label for="mail_persona" class="col-md-4 control-label"><span class="text-danger">*</span>Mail Persona</label>
		<div class="col-md-8">
			<input type="text" name="mail_persona" value="<?php echo ($this->input->post('mail_persona') ? $this->input->post('mail_persona') : $persona['mail_persona']); ?>" class="form-control" id="mail_persona" />
			<span class="text-danger"><?php echo form_error('mail_persona');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="razon_social_persona" class="col-md-4 control-label">Razon Social Persona</label>
		<div class="col-md-8">
			<input type="text" name="razon_social_persona" value="<?php echo ($this->input->post('razon_social_persona') ? $this->input->post('razon_social_persona') : $persona['razon_social_persona']); ?>" class="form-control" id="razon_social_persona" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>