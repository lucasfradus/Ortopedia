<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script type="text/javascript" src="<?php echo base_url("assets/ajax.js"); ?>"></script>
<link rel="stylesheet" href="<?php echo base_url("assets/css/mystyle4.css"); ?>" />
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-select.min.css"); ?>"/>
<script src="<?php echo base_url("assets/js/bootstrap-select.min.js"); ?>"></script>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     <a class="navbar-brand" href="#">
        <img alt="Brand" src=<?= base_url('assets/silla.png')?>>
      </a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Ortopedia FLAMA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?= base_url('Ventum'); ?>">Ventas</a></li>
         <li><a href="<?= base_url('Producto'); ?>">Productos</a></li>
          <li><a href="#">Pedidos</a></li>
           <li><a href="<?= base_url('Cliente'); ?>">Clientes</a></li>
            <li><a href="<?= base_url('Proveedor'); ?>">Proveedores</a></li>
             <li><a href="<?= base_url('Empleado'); ?>">Empleados</a></li>
         
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $usuario; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href=<?= base_url('Auth/edit_user/'.$id_user); ?> >Modificar Mis Datos</a></li>
          <li><a href="#">Ayuda</a></li>
          <li role="separator" class="divider"></li>
          <li><a href=<?= base_url('Auth/logout'); ?>>Cerrar Sesion</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


