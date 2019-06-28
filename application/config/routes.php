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
$route['default_controller'] = 'Bienvenidos/inicio';
$route['admin'] = 'Admin/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//PAGINAS DETALLES DE CONVOCATORIAS
$route['registro-campo'] = "Registro/grabar_campo";
$route['crear-cuenta'] = "Bienvenidos/crear_cuenta_nuevo";


$route['generar-idrepeater'] = "Registro/generarRepeaterId";
$route['consultar-dni'] = "Registro/obtenerDatosReniec";



//RUTAS DE CONVOCATORIAS 
$route['admin/convocatorias'] 			    = "Convocatorias/index";
$route['admin/convocatorias/listar'] 	    = "Convocatorias/listar";
$route['admin/convocatorias/agregar'] 	    = "Convocatorias/agregar_editar/$1";
$route['admin/convocatorias/editar/(:any)'] = "Convocatorias/agregar_editar/$1";
//$route['admin/convocatorias/(:any)'] 		= "Convocatorias/convocatorias_detalle/$1";

//RUTAS DE SEDES
$route['admin/sedes'] = "Sedes/index";
$route['admin/sedes/listar'] = "Sedes/listar";


//RUTAS DE ESCUELAS
$route['admin/escuelas'] 			   = "Escuelas/index";
$route['admin/escuelas/listar'] 	   = "Escuelas/listar";
$route['admin/escuelas/agregar'] 	   = "Escuelas/agregar_editar/$1";
$route['admin/escuelas/editar/(:any)'] = "Escuelas/agregar_editar/$1";

//RUTAS DE USUARIOS
$route['admin/usuarios'] 			   = "Usuarios/index";
$route['admin/usuarios/listar'] 	   = "Usuarios/listar";
$route['admin/usuarios/agregar'] 	   = "Usuarios/agregar_editar/$1";
$route['admin/usuarios/editar/(:any)'] = "Usuarios/agregar_editar/$1";


//RUTAS DE CURSOS
$route['admin/cursos'] 		  		 = "Cursos/index";
$route['admin/cursos/listar'] 		 = "Cursos/listar";
$route['admin/cursos/agregar'] 	     = "Cursos/agregar_editar/$1";
$route['admin/cursos/editar/(:any)'] = "Cursos/agregar_editar/$1";

//RUTAS DE CURSOS
$route['admin/facultades'] 		  		 = "Facultades/index";
$route['admin/facultades/listar'] 		 = "Facultades/listar";
//$route['admin/facultades/select'] 		 = "Facultades/listar_select";
$route['admin/facultades/agregar'] 	     = "Facultades/agregar_editar/$1";
$route['admin/facultades/editar/(:any)'] = "Facultades/agregar_editar/$1";





//FRONTEND
//$route['inicio'] = 'Inicio/index';
$route['concurso-de-meritos'] = 'Bienvenidos/concurso';
$route['cronogramas'] = 'Bienvenidos/cronogramas';
$route['requisitos'] = 'Bienvenidos/requisitos';
$route['plazas'] = 'Bienvenidos/plazas';
$route['instrucciones'] = 'Bienvenidos/instrucciones';

//RUTAS DE CONVOCATORIAS
$route['convocatorias'] = "Convocatorias/convocatorias";
$route['convocatorias/seleccionar/(:any)'] = "Convocatorias/convocatorias_seleccionar/$1";
$route['convocatorias/inicio'] = "Convocatorias/inicio";
$route['convocatorias/iniciar-sesion'] = "Bienvenidos/iniciar_sesion";
$route['convocatorias/registro'] = "Registro/index";
$route['convocatorias/cerrar-sesion'] = "Bienvenidos/cerrar_sesion";
$route['convocatorias/mantener-sesion'] = "Bienvenidos/mantener_sesion";




//GET AJAX AL EDITAR
$route['escuela_x_id'] = "Escuelas/get_escuela_x_id";
$route['convocatoria_x_id'] = "Convocatorias/get_convocatoria_x_id";
$route['cursos_x_convocatoria'] = "Convocatorias/get_cursos_por_convocatoria_select";










