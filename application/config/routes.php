<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'Page/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//page
$route['home'] = 'Page/home';
$route['sistem_pakar'] = 'Page/sistem_pakar';
// $route['regist'] = 'Page/regist';
$route['login'] = 'Page/login';
$route['proses_login'] = 'Page/proses_login';
$route['proses_tambah_kasus'] = 'Page/proses_tambah_kasus';
// $route['hasil'] = 'Page/hasil';

//admin
$route['logout'] = 'Page/logout';
$route['dashboard_admin'] = 'Admin/dashboard_admin';
$route['profile'] = 'Admin/profile';
$route['proses_edit_profile'] = 'Admin/proses_edit_profile';
//data admin
$route['data_admin'] = 'Admin/data_admin';
$route['edit_admin'] = 'Admin/edit_admin';
$route['edit_admin/(:any)'] = 'Admin/edit_admin/$1';
$route['proses_edit_admin'] = 'Admin/proses_edit_admin';
$route['tambah_admin'] = 'Admin/tambah_admin';
$route['proses_tambah_admin'] = 'Admin/proses_tambah_admin';
$route['delete_admin'] = 'Admin/delete_admin';
$route['delete_admin/(:any)'] = 'Admin/delete_admin/$1';

//dokter
$route['logout'] = 'Page/logout';
$route['dashboard_dokter'] = 'Dokter/dashboard_dokter';
$route['riwayat'] = 'Dokter/riwayat';
$route['profile_dokter'] = 'Dokter/profile_dokter';
$route['proses_edit_profile_dokter'] = 'Dokter/proses_edit_profile_dokter';
//data gejala
$route['data_gejala'] = 'Dokter/data_gejala';
$route['tambah_gejala'] = 'Dokter/tambah_gejala';
$route['proses_tambah_gejala'] = 'Dokter/proses_tambah_gejala';
$route['edit_gejala'] = 'Dokter/edit_gejala';
$route['edit_gejala/(:any)'] = 'Dokter/edit_gejala/$1';
$route['proses_edit_gejala'] = 'Dokter/proses_edit_gejala';
$route['delete_gejala'] = 'Dokter/delete_gejala';
$route['delete_gejala/(:any)'] = 'Dokter/delete_gejala/$1';
//data virus
$route['data_virus'] = 'Dokter/data_virus';
$route['tambah_virus'] = 'Dokter/tambah_virus';
$route['proses_tambah_virus'] = 'Dokter/proses_tambah_virus';
$route['edit_virus'] = 'Dokter/edit_virus';
$route['edit_virus/(:any)'] = 'Dokter/edit_virus/$1';
$route['proses_edit_virus'] = 'Dokter/proses_edit_virus';
$route['delete_virus'] = 'Dokter/delete_virus';
$route['delete_virus/(:any)'] = 'Dokter/delete_virus/$1';
//data kasus
$route['data_kasus'] = 'Dokter/data_kasus';
//aturan
$route['aturan_pakar'] = 'Dokter/aturan_pakar';
$route['simpan_bobot'] = 'Dokter/simpan_bobot';
