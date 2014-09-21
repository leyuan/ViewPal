<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
/*route for news*/
$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
$route['(:any)'] = 'users/$1';
$route['users/checkout'] = 'users/checkout';



/***************************Route for User****************************/
/*test*/
$route['user/test'] = 'users/test';
/*dashboard*/
$route['user/dashboard'] = 'users/dashboard';
$route['user/checkout'] = 'users/checkout';
/*signup*/
$route['signup/user/welcome'] = 'users/newuser_welcome';
$route['user/signup'] = 'users/signup_user';
$route['users/signup'] = 'users/signup';
/*login/logout*/
$route['user/login'] = 'users/login';
$route['user/logout'] = 'users/logout';


/***************************END Route for User****************************/


/***Route for Webmaster***/
$route['webmaster/dashboard'] = 'webmasters/dashboard';
/*signup*/
$route['webmaster/howdy'] = 'webmasters/howdy';
$route['webmaster/signup'] = 'webmasters/signup';
$route['webmaster/signup/welcome'] = 'webmasters/newwm_welcome';
/*login/logout*/
$route['webmaster/login'] = 'webmasters/login';
$route['webmaster/logout'] = 'webmasters/logout';


/***END Route for Webmaster***/



/***Route for Ajax***/
$route['ajax/checkhistory'] = 'ajax/checkHistory';
$route['ajax/checkbalance'] = 'ajax/checkBalance';
$route['ajax/pay'] = 'ajax/pay';
$route['ajax/login'] = 'ajax/login';
$route['ajax/logout'] = 'ajax/logout';



/*route for tutorial*/
$route['tutorial/webmaster'] = 'tutorials/webmaster';

$route['default_controller'] = "welcome";




/* End of file routes.php */
/* Location: ./application/config/routes.php */