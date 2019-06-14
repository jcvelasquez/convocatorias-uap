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
|		    my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Bienvenidos';
$route['admin'] = 'Admin/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//PAGINAS DETALLES DE CONVOCATORIAS
$route['registro'] = "Registro/index";
$route['registro-campo'] = "Registro/grabar_campo";
$route['crear-cuenta'] = "Bienvenidos/crear_cuenta_nuevo";
$route['cerrar-sesion'] = "Bienvenidos/cerrar_sesion";
$route['iniciar-sesion'] = "Bienvenidos/iniciar_sesion";
$route['generar-idrepeater'] = "Registro/generarRepeaterId";
$route['consultar-dni'] = "Registro/obtenerDatosReniec";

//RUTAS DE CONVOCATORIAS 
$route['admin/convocatorias/(:any)'] = "Admin/convocatorias_detalle/$1";

//RUTAS DE SEDES
$route['admin/sedes'] = "Sedes/index";
$route['admin/sedes/listar'] = "Sedes/listar";


//RUTAS DE ESCUELAS
$route['admin/escuelas'] 			   = "Escuelas/index";
$route['admin/escuelas/listar'] 	   = "Escuelas/listar";
//$route['admin/escuelas/select'] 	   = "Escuelas/listar_select";
$route['admin/escuelas/agregar'] 	   = "Escuelas/agregar_editar/$1";
$route['admin/escuelas/editar/(:any)'] = "Escuelas/agregar_editar/$1";




//RUTAS DE CURSOS
$route['admin/cursos'] 		  		 = "Cursos/index";
$route['admin/cursos/listar'] 		 = "Cursos/listar";
//$route['admin/cursos/select'] 		 = "Cursos/listar_select";
$route['admin/cursos/agregar'] 	     = "Cursos/agregar_editar/$1";
$route['admin/cursos/editar/(:any)'] = "Cursos/agregar_editar/$1";

//RUTAS DE CURSOS
$route['admin/facultades'] 		  		 = "Facultades/index";
$route['admin/facultades/listar'] 		 = "Facultades/listar";
$route['admin/facultades/select'] 		 = "Facultades/listar_select";
$route['admin/facultades/agregar'] 	     = "Facultades/agregar_editar/$1";
$route['admin/facultades/editar/(:any)'] = "Facultades/agregar_editar/$1";



//OBTENER LOS CAMPOS A EDITAR
$route['provincia/prov_x_depa'] = "Provincia/listar_provincias_x_depa";
$route['distrito/dist_x_prov'] = "Distrito/listar_distritos_x_prov";


//GET AJAX AL EDITAR
$route['escuela_x_id'] = "Escuelas/get_escuela_x_id";




