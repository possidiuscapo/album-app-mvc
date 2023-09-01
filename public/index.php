<?php
define('APP_ROOT', dirname(__DIR__));
require "../config/config.php";
// require "../app/models/AlbumModel.php";
require "../app/controllers/AlbumController.php";

$controller = new AlbumController();

// echo APP_ROOT;
$request = $_SERVER['REQUEST_URI'];

$queryString = strpos($request, '?');
if($queryString){
    echo (strstr($request, 'action='));
}

// $controller->store($_POST['title'],$_POST['artiste']);

if($request === '/'){
    $controller->home();

}else{
    echo ' ';
    require(APP_ROOT . '/app/views/pageNotFound.phtml');
}
// $controller
// AlbumModel::getAlbums()
/**
 * constante magique : constante prédéfini ayant une siginification 
 */
// echo __DIR__.'<br>';
// echo __FiLe__.'<br>';
// echo __DIR__.'<br>';