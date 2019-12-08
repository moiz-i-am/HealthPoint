<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//$route['/(:num)'] = '/$1';
$route['aboutus'] = 'home/about_us';
$route['ourteam'] = 'home/our_team';
$route['projects'] = 'home/projects';
$route['maps'] = 'home/maps';
$route['bloglisting'] = 'home/bloglisting';
$route['blogdetail'] = 'home/blogdetail';
$route['contactus'] = 'home/contactus';
$route['properties'] = 'home/properties';