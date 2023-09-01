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
    public function edit($id){
        // 
    }
    public function update($title, $artiste){
        // 
    }
    public function destroy($id){
        // 
    }


}

?>