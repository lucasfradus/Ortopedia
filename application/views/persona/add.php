<?php echo form_open('Persona/Add/'.$id_tipo,array("class"=>"form-horizontal")); ?>
	<div align="center">
			 <h2><?= $title ?> </h2>
	</div> 
<div class="row well">
	<div align="center">
	<div class="form-group">
	<input type="hidden" name="tipo_persona" value="<?= $id ?>">
	<!--
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
		-->
	</div>
	<div class="form-group">
		<label for="dni_persona" class="col-md-4 control-label"><span class="text-danger">*</span><?= lang('cli_dni') ?></label>
		<div class="col-xs-3">
			<input type="text" name="dni_persona" value="<?php echo $this->input->post('dni_persona'); ?>" class="form-control" id="dni_persona" />
			<span class="text-danger"><?php echo form_error('dni_persona');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="nombre_persona" class="col-md-4 control-label"><span class="text-danger">*</span>Nombre</label>
		<div class="col-xs-3">
			<input type="text" name="nombre_persona" value="<?php echo $this->input->post('nombre_persona'); ?>" class="form-control" id="nombre_persona" />
			<span class="text-danger"><?php echo form_error('nombre_persona');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="apellido_persona" class="col-md-4 control-label"><span class="text-danger">*</span>Apellido</label>
		<div class="col-xs-3">
			<input type="text" name="apellido_persona" value="<?php echo $this->input->post('apellido_persona'); ?>" class="form-control" id="apellido_persona" />
			<span class="text-danger"><?php echo form_error('apellido_persona');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="fecha_nac_persona" class="col-md-4 control-label">Fecha de Nacimiento</label>
		<div class="col-xs-3">
			<input class="form-control" type="date" name="fecha_nac_persona" value="<?= $this->input->post('fecha_nac_persona'); ?>" id="fecha_nac_persona" />
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
		<label for="tel_persona" class="col-md-4 control-label"><span class="text-danger">*</span>Telefono</label>
		<div class="col-xs-3">
			<input type="text" name="tel_persona" value="<?php echo $this->input->post('tel_persona'); ?>" class="form-control" id="tel_persona" />
			<span class="text-danger"><?php echo form_error('tel_persona');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="domiciolio_persona" class="col-md-4 control-label">Domicilio</label>
		<div class="col-xs-3">
			<input type="text" name="domiciolio_persona" value="<?php echo $this->input->post('domiciolio_persona'); ?>" class="form-control" id="domiciolio_persona" />
		</div>
	</div>
	<div class="form-group">
		<label for="cp_persona" class="col-md-4 control-label">Código Postal</label>
		<div class="col-xs-3">
			<input type="text" name="cp_persona" value="<?php echo $this->input->post('cp_persona'); ?>" class="form-control" id="cp_persona" />
		<span class="text-danger"><?php echo form_error('cp_persona');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="mail_persona" class="col-md-4 control-label"><span class="text-danger">*</span>Mail</label>
		<div class="col-xs-3">
			<input type="text" name="mail_persona" value="<?php echo $this->input->post('mail_persona'); ?>" class="form-control" id="mail_persona" />
			<span class="text-danger"><?php echo form_error('mail_persona');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="razon_social_persona" class="col-md-4 control-label">Razon Social</label>
		<div class="col-xs-3">
			<input type="text" name="razon_social_persona" value="<?php echo $this->input->post('razon_social_persona'); ?>" class="form-control" id="razon_social_persona" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Guardar</button>
        </div>
	</div>
</div>
</div>

<?php echo form_close(); ?>