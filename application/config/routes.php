<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'dashboard/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['Clientes'] = 'Persona/indexClientes';
$route['Empleados'] = 'Persona/indexClientes';
$route['Proveedores'] = 'Persona/indexClientes';

