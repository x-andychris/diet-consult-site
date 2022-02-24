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
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = 'Error_404';
$route['translate_uri_dashes'] = FALSE;

// ------------- custom routes ----------------
$route['register'] = 'Auth/register';

$route['mealplans'] = 'Home/mealplans';
$route['mealplans/(:any)/info'] = 'Home/mealplan_info/$1';
$route['mealplans/(:any)/plan'] = 'Home/mealplan_plan/$1';
$route['mealplans/(:any)/shoppinglist'] = 'Home/mealplan_shoppinglist/$1';

$route['my/mealplan'] = 'MyMealPlan/mealplan';

$route['my/mealplan/to-eat'] = 'MyMealPlan/to_eat_section';
$route['my/mealplan/to-avoid'] = 'MyMealPlan/to_avoid_section';

$route['my/mealplan/drinks'] = 'MyMealPlan/to_drink_section';
$route['my/mealplan/snacks'] = 'MyMealPlan/to_snack_section';
$route['my/mealplan/shoppinglist'] = 'MyMealPlan/shoppinglist_section';

$route['my/profile'] = 'Profile/profile';

// ------------- db queries ----------------
$route['q/login'] = 'Auth/login_action';
$route['q/register'] = 'Auth/register_action';
$route['q/logout'] = 'Profile/logout_action';

$route['q/updateprofile'] = 'Profile/update_profile_action';
$route['q/updatepassword'] = 'Profile/update_password_action';
$route['q/updatemealplan'] = 'Profile/update_mealplan_action';

// ------------- disable direct access ----------------
$route['Auth'] = 'Error_404';
$route['Home'] = 'Error_404';
$route['Profile'] = 'Error_404';
$route['MyMealPlan'] = 'Error_404';