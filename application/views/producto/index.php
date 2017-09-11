<div class="pull-right">
	<a href="<?php echo site_url('producto/add'); ?>" class="btn btn-success">Add</a> 
</div>
<table class="table table-striped table-bordered">
    <tr>
		<th>Id Producto</th>
		<th>Proveedor</th>
		<th>Nombre Producto</th>
		<th>Precio Compra </th>
		<th>Precio Venta </th>
		<th>Stock </th>
	
		<th>Stock Minimo </th>
		<th>Acciones</th>
    </tr>
	<?php foreach($producto as $p){ 
		if($p['stock_producto'] == $p['stock_minimo_producto']){
			$class = "warning";
		}elseif($p['stock_producto'] >= $p['stock_minimo_producto']){
			$class = "success";
		}else{
			$class = "danger";
		}
		?>

    <tr>
		<td class=<?=$class ?>> <?= $p['id_producto']; ?></td>
		<td class=<?=$class ?>><a href="<?php echo site_url('Proveedor/view/'.$p['id_persona']); ?>"><?= $p['nombre_persona']; ?></a></td>
		<td class=<?=$class ?>><?= $p['nombre_producto']; ?></td>
		<td class=<?=$class ?>><?= $p['precio_compra_producto']; ?></td>
		<td class=<?=$class ?>><?= $p['precio_venta_producto']; ?></td>
		<td class=<?=$class ?>><?= $p['stock_producto']; ?></td>
		<td class=<?=$class ?>><?= $p['stock_minimo_producto']; ?></td>
		<td class=<?=$class ?>>
			
            <a href="<?php echo site_url('producto/edit/'.$p['id_producto']); ?>" class="btn btn-info btn-xs">Editar</a> 
            <a href="<?php echo site_url('producto/remove/'.$p['id_producto']); ?>" class="btn btn-danger btn-xs">Eliminar</a>
        </td>
    </tr>
	<?php } ?>
</table>