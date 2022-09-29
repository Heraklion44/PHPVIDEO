<?php

session_start();

use Router\Router;
use App\Exceptions\NotFoundException;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DB_NAME', 'myapp');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', 'root');

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\BlogController@welcome');
$router->get('/posts', 'App\Controllers\BlogController@index');
$router->get('/posts/:id', 'App\Controllers\BlogController@show');

$router->get('/admin/posts', 'App\Controllers\Admin\PostController@index');
$router->get('/admin/posts/create', 'App\Controllers\Admin\PostController@create');
$router->post('/admin/posts/create', 'App\Controllers\Admin\PostController@createPost');
$router->post('/admin/posts/delete/:id','App\Controllers\Admin\PostController@destroy');
$router->get('/admin/posts/edit/:id', 'App\Controllers\Admin\PostController@edit');
$router->post('/admin/posts/edit/:id', 'App\Controllers\Admin\PostController@update');

$router->get('/admin/comments', 'App\Controllers\Admin\CommentController@index');
$router->post('/admin/comments/delete/:id','App\Controllers\Admin\CommentController@destroy');
$router->post('/comment/create', 'App\Controllers\Admin\CommentController@createComment');
$router->post('/admin/comments/keep/:id','App\Controllers\Admin\CommentController@keep');
$router->post('/admin/comments/report/:id','App\Controllers\Admin\CommentController@report');

$router->post('/connexionUser', 'App\Controllers\UserController@connexion');
$router->get('/connexion', 'App\Controllers\UserController@connexionForm');



try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404();
}