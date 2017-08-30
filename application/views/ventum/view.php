<div class="row well">
	<div align="center">
	<h2>Detalle de Venta</h2>
	<hr>
		<div class="col-xs-9">
			<div class="row">
				<fieldset class="form-group">
					<div class="col-xs-4">
						<label for="ex1">Id Venta</label>
						<input class="form-control" id="ex1" type="text" value=<?= $ventum['id_venta'] ?> disabled="disabled">
					</div>
						<div class="col-xs-4">
						<label for="ex1">Cliente</label>
						<input class="form-control" id="ex1" type="text" value=<?= $ventum['apellido_persona'].', '.$ventum['nombre_persona']; ?> disabled="disabled">
					</div>
						<div class="col-xs-4">
						<label for="ex1">Fecha</label>
						<input class="form-control" id="ex1" type="text" value=<?= $ventum['fecha_venta'] ?> disabled="disabled">
					</div>
				</fieldset>
			</div>
		</div>
	<br><br><br><hr>
<h3>Detalle de Productos</h3>
	<hr>
		<table class="table table-striped table-bordered">
    <tr>
		<th>Id Pedido</th>
		<th>Id Producto</th>
		<th>Costo Unitario</th>
    </tr>
	<?php foreach($producto as $p){ ?>
    <tr>
		<td><?php echo $p['id_pedido']; ?></td>
		<td><?php echo $p['id_producto']; ?></td>
		<td><?php echo $p['costo']; ?></td>
    </tr>
	<?php } ?>
</table>



	</div>
</div>