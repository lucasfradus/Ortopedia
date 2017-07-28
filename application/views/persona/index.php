

<title> <?= $tittle ?></title>
<div align=center><h2> <?= $tittle; ?> </h2></div>

<div align="left">
	<div class="btn-group" role="group" aria-label="...">
		 <a href=<?= base_url('Persona/Add/'.$id); ?> type="button" class="btn btn-default">Nuevo <?= $id ?></a> 
	</div>
</div>

<div class="row well">


	<div align="center">







<table class="table table-striped table-hover">
    <tr>
		<th>DNI</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Fecha Nacimiento</th>
		<th>Telefono</th>
		<th>Domiciolio</th>
		<th>Codigo Postal</th>
		<th>Mail</th>
		<th>Razon Social</th>
		<th>Editar</th>
		<th>Elimiar</th>
    </tr>
	<?php foreach($personas as $p){ ?>
    <tr>
		<td><?php echo $p['dni_persona']; ?></td>
		<td><?php echo $p['nombre_persona']; ?></td>
		<td><?php echo $p['apellido_persona']; ?></td>
		<td><?php echo $p['fecha_nac_persona']; ?></td>
		<td><?php echo $p['tel_persona']; ?></td>
		<td><?php echo $p['domiciolio_persona']; ?></td>
		<td><?php echo $p['cp_persona']; ?></td>
		<td><?php echo $p['mail_persona']; ?></td>
		<td><?php echo $p['razon_social_persona']; ?></td>
		<td><a href="<?php echo site_url('persona/edit/'.$p['id_persona']); ?>" class="glyphicon glyphicon-edit"></a> </td>
	<td>
         <a href="<?php echo site_url('persona/remove/'.$p['id_persona']); ?>" class="glyphicon glyphicon-remove"></a>
        </td>
    </tr>
	<?php } ?>
</table>


</div>
</div>