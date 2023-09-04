<?php
require (APP_ROOT.'/app/models/AlbumModel.php');

class AlbumController
{
    
    public function home()
    {
        $albums = AlbumModel::getAlbums();
        //Affiche la liste de tous les albums
        require( APP_ROOT.'/app/views/home.phtml');
    }
    public function create(){
        // Afficher le formulaire de création d'album

    }
    public function store($title, $artiste){
        // Afficher la liste de tous les albums
        AlbumModel::addAlbum($title, $artiste);
    }
    public function show($id){
        // 
    }
    public function edit( $id){
        // Permet de modifer l
        $album = AlbumModel::getAlbumById($id);
        require APP_ROOT . '/app/views/editAlbum.php';
    }
    public function update( $id, $title, $artiste){
        // 
        $album = AlbumModel::updateAlbum($id, $title, $artiste);
        header("HTTP:/1.1 302 Found");
        header("Location: /");
        exit();
    }
    public function destroy(int $id){
        // 
        AlbumModel::deleteAlbum($id);
        header("HTTP:/1.1 302 Found");
        header("Location: /");
        exit();
    }


}

?>