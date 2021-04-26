<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['admin'] = 'admin/dashboard';
$route['manager'] = 'manager/dasboard';
$route['user'] = 'user/dasboard';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
