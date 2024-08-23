<?php 
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\AppController;
use Controllers\LoginController;

$router = new Router();
$router->setBaseURL('/' . $_ENV['APP_NAME']);

// $router->get('/', [AppController::class,'index']); ESTA CARPETA ES DONDE TIRA DESDE EL PRINCIPIO EN LA RAÍZ, SE COMENTÓ Y A LOGIN SE LE QUITÓ AUTH PARA QUE TIRE EN DIRECTO AL LOGIN

//LOGIN
$router->get('/', [LoginController::class,'index']);
$router->post('/API/login', [LoginController::class,'loginAPI']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
