<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'Maincontroller';

$route['kursus/tambah-kursus'] = 'Maincontroller/addKursus';
$route['kursus/tambah-peserta/(:num)'] = 'Maincontroller/adduserkursus/$1';
$route['kursus/qr/(:num)'] = 'Maincontroller/kursusqr/$1';
$route['kursus/scanqr/(:num)/(:num)'] = 'Maincontroller/generateQR/$1/$2';
$route['kursus/pengesahan/(:num)/(:num)'] = 'Maincontroller/pegesahanid/$1/$2/';
$route['kursus/tumb'] = 'Maincontroller/tumbrint';
$route['pengguna/tambah-pengguna'] = 'Maincontroller/addUsers';
$route['pengguna/senarai-nama'] = 'Maincontroller/userList';
$route['users'] = 'Maincontroller/userList';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
