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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Agenda
$route['agenda'] = 'agenda/index';
$route['agenda/loadMore/(:num)'] = 'agenda/loadMore/$1';
$route['agenda/search'] = 'agenda/search';
$route['agenda/detailAgenda/(:any)'] = 'agenda/detailAgenda/$1';

// Blog
$route['blog'] = 'blog/index';
$route['blog/detail/(:any)'] = 'blog/detail/$1';
$route['blog/loadMore/(:num)'] = 'blog/loadMore/$1';

// login
$route['login'] = 'login';
// dashboard
$route['admin/Dashboard'] = 'admin/dashboard';

// Visi misi
$route['admin/visimisi'] = 'admin/VisiMisi';
$route['admin/visimisi/tambah'] = 'admin/VisiMisi/tambah';
$route['admin/visimisi/edit/(:any)'] = 'admin/VisiMisi/edit/$1';

// Pimpinan
$route['admin/pimpinan'] = 'admin/Pimpinan';
$route['admin/pimpinan/tambah'] = 'admin/Pimpinan/tambah';
$route['admin/pimpinan/edit/(:any)'] = 'admin/Pimpinan/edit/$1';

// Imam
$route['admin/imam'] = 'admin/Imam';
$route['admin/imam/tambah'] = 'admin/Imam/tambah';
$route['admin/imam/edit/(:any)'] = 'admin/Imam/edit/$1';

// Agenda
$route['admin/agenda'] = 'admin/Agenda';
$route['admin/agenda/tambah'] = 'admin/Agenda/tambah';
$route['admin/agenda/edit/(:any)'] = 'admin/Agenda/edit/$1';