<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Usuario';
//$route['ingreso']= 'Usuario/formulario';
//http://localhost:8080/tienda/index.php/ingreso
//http://localhost/tienda/index.php/registrar-usuario
$route['registrar-usuario']= 'Usuario/ver_formulario_registrar';
$route['observar-tienda']= 'Usuario/observar';
//http://localhost/tienda/index.php/ver-productos
$route['contactanos']='usuario/contactanos';
$route ['principal-pagina']='Usuario/principal_pagina';
$route['ver-productos']=  'Usuario/ver_productos';
$route['panel']=  'Admin';
//creacion de productos
$route['guardar-producto']=  'Usuario/guardar_producto';
$route['guardar-productos']=  'Usuario/ver_guardar_productos';
//$route['contacto']=  'Usuario/contacto';
$route['login']=  'Admin/login';
$route['login_usuario']=  'Usuario/loginusuario';
$route['login-guardar']=  'Usuario/login_guardar';
$route['listar']='Admin/listados';
$route['ver-consolidado']=  'Admin/ver-consolidado';
//$route['autenticar'] = 'Usuario/autenticar';
$route['guardar-admin']=  'Usuario/guardar_admin';
$route['registro-admin']=  'Admin/registro_admin';
$route['guardar-usuario']= 'Usuario/guardar_usuario';
$route['gestionar-articulo/eliminar']=  'Admin/gestionar_articulo_eliminar';
$route['gestionar-pedido/eliminar']=  'Admin/gestionar_pedido_eliminar';
$route['gestionar-usuario/eliminar']=  'Admin/gestionar_usuario_eliminar';
//buscar y editar
$route['buscando/(:any)'] = 'Admin/ver_buscando/$1';
$route['editar'] = 'Admin/ver_editar';
//registrar productos
$route['registrarp']=  'Admin/registrarp';
//cerrar la sesion
$route['salir']=  'Admin/salir';
$route['productos']=  'Admin/productos';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
