<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Custom Configs File
|--------------------------------------------------------------------------
| Hoja de configuraciones generales del sistema
| Autor: Lucas Fradusco
| Fecha: 04/2017
|
*/


$config['email'] = 'lucas.fradusco@gmail.com';

/*
|--------------------------------------------------------------------------
| Custom Config: TOLERANCIA
|--------------------------------------------------------------------------
| esta variable define la tolerancia que se va a tener para ingresar un alumno en una clase
| si llega 11:01 va a devolver clase de las 11. si llega 11:11 ya entra en la clase de las 12.
| el valor representa minutos
|
*/
$config['tolerancia'] = 10;



/*
|--------------------------------------------------------------------------
| Custom Config: ROLES
|--------------------------------------------------------------------------
| Acá defino el id que va a tener cada rol, segun los id, valido
| los permisos y veo que hacer con el usuario
| Estos son los roles que van a figurar en la tabla roles_group junto con el id de usuario
|
*/
//PERSONAS
$config['VerClientes']				= 1;
$config['VerEmpleados']				= 2;
$config['VerProveedores']			= 3;
$config['AltaClientes']				= 4;
$config['AltaEmpleados']			= 5;
$config['AltaProveedores']			= 6;
$config['EditarClientes']			= 7;
$config['EditarEmpleados']			= 8;
$config['EditarProveedores']		= 9;
$config['DeleteClientes']			= 10;
$config['DeleteEmpleados']			= 11;
$config['DeleteProveedores']		= 12;
$config['VerVentas']				= 13;
$config['VerProductos']				= 14;
$config['NuevaVenta']				= 15;


	





?>