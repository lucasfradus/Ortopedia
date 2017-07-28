<div class="pull-right">
	<a href="<?php echo site_url('tipo_persona/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Tipo Persona</th>
		<th>Nombre Tipo Persona</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tipo_persona as $t){ ?>
    <tr>
		<td><?php echo $t['id_tipo_persona']; ?></td>
		<td><?php echo $t['nombre_tipo_persona']; ?></td>
		<td>
            <a href="<?php echo site_url('tipo_persona/edit/'.$t['id_tipo_persona']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tipo_persona/remove/'.$t['id_tipo_persona']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
