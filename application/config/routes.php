<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'home/index';
$route['about'] = 'about/index';
$route['services'] = 'services/index';
$route['apply'] = 'apply/index';
$route['policy'] = 'policy/index';
$route['policy/(:any)'] = 'policy/index/$1';
$route['contact'] = 'contact/index';
