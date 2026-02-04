<?php
require_once 'vendor/autoload.php';

use Dotenv\Dotenv;
use App\Core\Config;
use App\Core\Route;

const ROOT_PATH = __DIR__;

$dotenv = Dotenv::createImmutable('./');
$dotenv->load();

Config::init(); //- подключение БД

require_once '.\app\Routes\routes.php';
Route::dispatch();