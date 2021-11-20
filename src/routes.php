<?php
namespace App;
use App\Controllers\MovieController;
use App\Core\SQLConexion;
//var_dump ($_SERVER);
$uri = $_SERVER["REQUEST_URI"];

$db = (new SQLConexion())->mysql;
$query = $db->query("SELECT * FROM movies ");
$result = $query->fetchAll();

$controller = new MovieController();

if ($uri == '/movies' || $uri == '/') {
    //require_once __DIR__ . '/Views/pages/MovieList.php';
    $controller -> index();
}

if ($uri == '/movies/create') {
    //require_once __DIR__ . '/Views/pages/MovieCreate.php';
    $controller->create();
}