<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';

$route['admin']='login';
$route['admin/biodata']	='admin/biodata';
$route['admin/pendidikan']='admin/pendidikan';
$route['admin/portfolio']='admin/portfolio';
$route['admin/pengalaman']='admin/pengalaman';
$route['admin/skill']='admin/skill';
$route['admin/sosmed']='admin/sosmed';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about'] = 'about';
$route['contact'] = 'contact';
