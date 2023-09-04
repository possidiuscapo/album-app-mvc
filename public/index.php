<?php
declare(strict_types=1);

define('APP_ROOT', dirname(__DIR__));
require "../config/config.php";
// require "../app/models/AlbumModel.php";
require "../app/controllers/AlbumController.php";

$controller = new AlbumController();

$request = $_SERVER['REQUEST_URI'];
// echo APP_ROOT;
$queryString = strpos($request, '?');
if ($queryString !== false) {
    $request = substr($request, 0, $queryString);
    // echo (strstr($request, 'action='));
}


// $controller->store($_POST['title'],$_POST['artiste']);

if ($request === '/' || $request === "/home") {
    $controller->home();

} elseif ($request === '/edit') {
    $id = (int) $_GET['id'];
    $controller->edit($id);

} elseif ($request === '/update') {
    $id = (int) $_POST['id'];
    $title = $_POST['title'];
    $artist = $_POST['artiste'];
    print_r($album);
    $controller->update($id, $title, $artist);

} elseif ($request === '/delete') {
    $id = (int) $_GET["id"];
    $controller->destroy($id);
    // /delete/1='/'
    // /delete?id=1
    
} elseif ($request === '/add') {
    // print_r($_POST);
    $controller->store($_POST['title'], $_POST['artiste']);
    echo "";
    header('HTTP:/1.1 302');
    header('Location: /home');
    exit();
    // $controller->home();
    // require(APP_ROOT . '/public/index.php');
} else {
    echo ' ';
    require(APP_ROOT . '/app/views/pageNotFound.phtml');
    spl_autoload_register();
}
// $controller
// AlbumModel::getAlbums()
/**
 * constante magique : constante prédéfini ayant une siginification 
 */
// echo __DIR__.'<br>';
// echo __FiLe__.'<br>';
// echo __DIR__.'<br>';