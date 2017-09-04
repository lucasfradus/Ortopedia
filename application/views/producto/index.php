<div class="pull-right">
	<a href="<?php echo site_url('producto/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Producto</th>
		<th>Id Proveedor Producto</th>
		<th>Nombre Producto</th>
		<th>Precio Compra Producto</th>
		<th>Precio Venta Producto</th>
		<th>Stock Producto</th>
		<th>Stock Minimo Producto</th>
		<th>Actions</th>
    </tr>
	<?php foreach($producto as $p){ ?>
    <tr>
		<td><?php echo $p['id_producto']; ?></td>
		<td><?php echo $p['nombre_persona']; ?></td>
		<td><?php echo $p['nombre_producto']; ?></td>
		<td><?php echo $p['precio_compra_producto']; ?></td>
		<td><?php echo $p['precio_venta_producto']; ?></td>
		<td><?php echo $p['stock_producto']; ?></td>
		<td><?php echo $p['stock_minimo_producto']; ?></td>
		<td>
            <a href="<?php echo site_url('producto/edit/'.$p['id_producto']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('producto/remove/'.$p['id_producto']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>