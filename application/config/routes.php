<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'dashboard/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['Cliente'] = 'Persona/indexClientes';
$route['Empleado'] = 'Persona/indexEmpleados';
$route['Proveedor'] = 'Persona/indexProveedores';

