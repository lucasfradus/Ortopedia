


<script src="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"></script>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>




<?php echo form_open('ventum/add',array("class"=>"form-horizontal")); ?>
<div class="row well">

	<div class="form-group">
	<div class="col-xs-4">
		<label for="id_cliente_venta" ><span class="text-danger">*</span>Cliente</label>
			<select name="id_cliente_venta" class="selectpicker" data-live-search="true">
				<?php 
				foreach($all_personas as $persona)
				{
					$selected = ($persona['id_persona'] == $this->input->post('id_cliente_venta')) ? ' selected="selected"' : "";

					echo '<option value="'.$persona['id_persona'].'" '.$selected.'>'.$persona['apellido_persona'].', '.$persona['nombre_persona'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('id_cliente_venta');?></span>
		</div>
<main class="container pt-5">
        <div class="card mb-5">
            <div class="card-header"></div>
            <div class="card-block p-0">
                <table class="table table-bordered table-sm m-0">
                    <thead class="">
                        <tr>
                            <th><span class="text-danger">*</span><strong>Productos </strong></label></th>
                            <th>Nombre</th>
                            <th>Stock Disponible</th>
                            <th>Precio</th>
                        </tr>
                    </thead>    
                    <?php 
				foreach($all_producto as $producto){ 
					$disabled = ($producto['stock_producto'] == 0) ? 'disabled' : "";
					?>
					 <tbody>
                        <tr>
                            <td>
                                <label class="custom-control custom-checkbox" >
                                    <input type="checkbox" class="custom-control-input" <?= $disabled ?> name="id_productos_venta[]" value=<?= $producto['id_producto'] ?>>
                                    <span class="custom-control-indicator" ></span>
                                </label>
                            </td>
                            <td><?= $producto['nombre_producto'] ?></td>
                            <td><?= $producto['stock_producto'] ?></td>
                            <td><?= $producto['precio_venta_producto'] ?></td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
       <span class="text-danger"><?php echo form_error('id_productos_venta');?></span>
    </main>
    	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Guardar</button>
        </div>
	</div>
	</div>
	</div>

<?php echo form_close(); ?>

    <style type="text/css">
    	html {
    font-family: Lato, 'Helvetica Neue', Arial, Helvetica, sans-serif;
    font-size: 14px;
}

.table {
    border: none;
}

.table-definition thead th:first-child {
    pointer-events: none;
    background: white;
    border: none;
}

.table td {
    vertical-align: middle;
}

.page-item > * {
    border: none;
}

.custom-checkbox {
  min-height: 1rem;
  padding-left: 0;
  margin-right: 0;
  cursor: pointer; 
}
  .custom-checkbox .custom-control-indicator {
    content: "";
    display: inline-block;
    position: relative;
    width: 30px;
    height: 10px;
    background-color: #818181;
    border-radius: 15px;
    margin-right: 10px;
    -webkit-transition: background .3s ease;
    transition: background .3s ease;
    vertical-align: middle;
    margin: 0 16px;
    box-shadow: none; 
  }
    .custom-checkbox .custom-control-indicator:after {
      content: "";
      position: absolute;
      display: inline-block;
      width: 18px;
      height: 18px;
      background-color: #f1f1f1;
      border-radius: 21px;
      box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
      left: -2px;
      top: -4px;
      -webkit-transition: left .3s ease, background .3s ease, box-shadow .1s ease;
      transition: left .3s ease, background .3s ease, box-shadow .1s ease; 
    }
  .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator {
    background-color: #84c7c1;
    background-image: none;
    box-shadow: none !important; 
  }
    .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator:after {
      background-color: #84c7c1;
      left: 15px; 
    }
  .custom-checkbox .custom-control-input:focus ~ .custom-control-indicator {
    box-shadow: none !important; 
  }
    </style>
