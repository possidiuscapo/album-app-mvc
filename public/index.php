<?php
declare(strict_types=1);

define('APP_ROOT', dirname(__DIR__));
require "../config/config.php";
// require "../app/models/AlbumModel.php";
require "../app/controllers/AlbumController.php";

$controller = new AlbumController();

// echo APP_ROOT;
/**$queryString = strpos($request, '?');
if($queryString){
    echo (strstr($request, 'action='));
}*/ 

$request = $_SERVER['REQUEST_URI'];

// $controller->store($_POST['title'],$_POST['artiste']);

if($request === '/'){
    $controller->home();
}elseif ($request === '/edit') {
}elseif ($request === '/update') {
}elseif ($request === '/delete') {
}elseif ($request === '/add') {
    print_r($_POST);
    $controller->store($_POST['title'],$_POST['artiste']);
    echo "envoie en cours";
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