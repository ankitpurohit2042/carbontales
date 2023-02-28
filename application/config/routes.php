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
$route['default_controller'] = 'welcome';
$route['admin'] = 'admin';

/** Auth Routing */
$route['admin/login'] = 'BackendController/AuthController/LoginController';
$route['admin/login/save']['post'] = 'BackendController/AuthController/LoginController/authenticated';

/**Category Routing */
$route['admin/category'] = 'BackendController/Category';
$route['admin/category/create'] = 'BackendController/Category/create';
$route['admin/category/save']['post'] = 'BackendController/Category/save';
$route['admin/category/edit/(:any)']['get'] = 'BackendController/Category/edit/$1';
$route['admin/category/update/(:any)']['post'] = 'BackendController/Category/update/$1';
$route['admin/category/delete/(:any)'] = 'BackendController/Category/delete/$1';

$route['product'] = 'product';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['blog/(:num)'] = 'welcome/article/$1';
$route['product/(:num)'] = 'product/viewProduct/$1';

$route['enquiry'] = 'enquiry';

$route['admin/dashboard'] = 'BackendController/Dashboard';


$route['/admin/changeHomeText'] = 'admin/changeHomeText';
$route['/admin/changeAboutText'] = 'admin/changeAboutText';

$route['/admin/addFeedback'] = 'admin/addFeedback';
$route['/admin/editFeedback/(:num)'] = '/admin/editFeedback/$1';
$route['/admin/deleteFeedback/(:num)'] = '/admin/deleteFeedback/$1';

$route['/admin/addAbout'] = 'admin/addAbout';
$route['/admin/editAbout/(:num)'] = '/admin/editAbout/$1';
$route['/admin/deleteAbout/(:num)'] = '/admin/deleteAbout/$1';

$route['/admin/contactInfo'] = 'admin/contactInfo';

$route['/admin/addPendant'] = 'admin/addPendant';
$route['/admin/editPendant/(:num)'] = '/admin/editPendant/$1';
$route['/admin/deletePendant/(:num)'] = '/admin/deletePendant/$1';

$route['/admin/addProduct'] = 'admin/addProduct';
$route['/admin/editProduct/(:num)'] = '/admin/editProduct/$1';
$route['/admin/deleteProduct/(:num)'] = '/admin/deleteProduct/$1';
$route['/admin/deleteProductImage'] = '/admin/deleteProductImage';

$route['/admin/addChain'] = 'admin/addChain';
$route['/admin/editChain/(:num)'] = '/admin/editChain/$1';
$route['/admin/deleteChain/(:num)'] = '/admin/deleteChain/$1';


$route['contact'] = 'welcome/contact';
$route['about'] = 'welcome/about';
$route['teacher'] = 'welcome/teacher';
$route['courses'] = 'welcome/courses';
$route['pricing'] = 'welcome/pricing';
$route['blog'] = 'welcome/blog';
$route['carbons'] = 'welcome/carbons';
$route['make-your-own'] = 'welcome/makeyourown';
$route['welcome/addToCart'] = 'welcome/addToCart';
$route['welcome/addToCartCustom'] = 'welcome/addToCartCustom';
$route['cart'] = 'welcome/cart';
$route['welcome/updateCart'] = 'welcome/updateCart';
$route['welcome/removeItem'] = 'welcome/removeItem';
$route['checkout'] = 'welcome/checkout';
$route['get-in-touch'] = 'welcome/getInTouch';
$route['inside-box'] = 'welcome/getInsideBox';
$route['gifting'] = 'welcome/gifting';