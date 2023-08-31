<?php
require "../config/config.php";
class AlbumModel
{
    // Methode qui permet d'ajouter des albums dans la base de données
    public function addAlbums()
    {

    }
    // Methode qui permet de recuperer dans la base de données
    public function getAlbums()
    {
        $query = DB->prepare('SELECT * FROM albums');
        $query->execute();
        $album = $query->fetchAll;
    }
    // Methode qui permet d'ajouter dans la base de données
    public function updateAlbums()
    {
        $query = DB->prepare('SELECT * FROM albums');
        $query->execute();
    }
    // Methode qui permet d'ajouter dans la base de données
    public function delateAlbums()
    {
        $query = DB->prepare('SELECT * FROM albums');
        $query->execute();
    }
}
?>