<div class="pull-right">
	<a href="<?php echo site_url('productos_pedido/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Pedido</th>
		<th>Id Producto</th>
		<th>Actions</th>
    </tr>
	<?php foreach($productos_pedido as $p){ ?>
    <tr>
		<td><?php echo $p['id_pedido']; ?></td>
		<td><?php echo $p['id_producto']; ?></td>
		<td>
            <a href="<?php echo site_url('productos_pedido/edit/'.$p['']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('productos_pedido/remove/'.$p['']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
