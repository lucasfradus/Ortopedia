
<div class="pull-right">
	<a href="<?php echo site_url('ventum/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Venta</th>
		<th>Cliente</th>
		<th>Hora Venta</th>
		<th>Fecha Venta</th>
		<th>Monto</th>
		<th>Actions</th>
    </tr>
	<?php foreach($venta as $v){ ?>
    <tr>
		<td><?php echo $v['id_venta']; ?></td>
		<td><?php echo $v['apellido_persona'].', '.$v['nombre_persona']; ?></td>
		<td><?php echo $v['hora_venta']; ?></td>
		<td><?php echo $v['fecha_venta']; ?></td>
		<td><?php echo"$ ". $v['monto']; ?></td>
		<td>
			<a href="<?php echo site_url('ventum/view/'.$v['id_venta']); ?>" class="btn btn-success btn-xs">Ver Detalle</a> 
            <a href="<?php echo site_url('ventum/edit/'.$v['id_venta']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('ventum/remove/'.$v['id_venta']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>