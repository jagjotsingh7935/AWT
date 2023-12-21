<?php
use CodeIgniter\Router\RouteCollection;
/**
* @var RouteCollection $routes
*/
//$routes->get('/', 'Home::index');
$routes->get('/', 'Studentcontroller::loginto');
$routes->get('/students/process', 'Studentcontroller::process');
//$routes->get('/students/login', 'Studentcontroller::login');
$routes->get('/students', 'Studentcontroller::index');
$routes->get('/students/create', 'Studentcontroller::create');
$routes->post('/students/add','Studentcontroller::store');
$routes->get('/students/delete/$name','Studentcontroller::delete');
$routes->get('/students/delete/(:segment)', 'StudentController::delete/$1');
$routes->get('/students/edit/(:segment)', 'StudentController::edit/$1');
$routes->get('create-my-delete', 'StudentController::createmydelete');