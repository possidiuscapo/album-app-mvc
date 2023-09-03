<?php
// require "../config/config.php";
require (APP_ROOT.'/config/config.php"');
class AlbumModel
{

    private static function getConnexion()
    {
        global $db_host, $db_port, $db_name, $db_username, $db_password, $options;
        try {
            $dsn = "mysql:host=$db_host;port=$db_port;dbname=$db_name;";

            $db = new PDO($dsn, $db_username, $db_password, $options);
            // var_dump($db);
            return $db;
        } catch (\PDOException $error) {
            echo 'Erreur : ' . $error->getMessage() .' à la ligne '.$error->getLine();
            // echo '<pre>';
            // print_r($error);
            // echo '<\pre>';
        }
    }

    // Méthode pour ajouter un nouvel album (CREATE)
    public static function addAlbum(string $title, string $artist)
    {
        // Code pour ajouter un album à la base de données
        $db = self::getConnexion();
        if ($db !== null) {
            try {
                $sql = "INSERT INTO albums (title, artiste) VALUES (:title,:artiste) ";
                $stmt = $db->prepare($sql);
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':artiste', $artist);
                $stmt->execute();
                return true;
            } catch (\PDOException $err) {
                echo 'Erreur: ' . $err->getMessage();
                return false;
            }
        }


    }

    // Méthode pour récupérer tous les albums
    public static function getAlbums()
    {
        // Code pour récupérer tous les albums depuis la base de données
        $db = self::getConnexion();
        if ($db !== null) {
            try {
                $sql = "SELECT * FROM albums;";

                $stmt = $db->prepare($sql);
                // echo '<pre>';
                // print_r($stmt);
                $stmt->execute();
                $albums = $stmt->fetchAll();
                // print_r($albums);

                return $albums;
                // foreach ($db->query($sql, PDO::FETCH_OBJ) as $album) {
                //     echo '<pre>';
                //     echo "";
                //     // print_r($album);
                //     /** pour ::FETCH_OBJ */
                //     echo $album->id . " " . $album->title;
                //     /** pour ::FETCH_ASSOC */
                //     // echo $user['id'] . " " . $user['user_name'];

                //     echo '</pre>';

                // } 
           

            } catch (\PDOException $err) {
                echo 'Erreur: ' . $err->getMessage();
                return [];
            }
        }

    }


    // Méthode pour récupérer un album par son ID
    public static function getAlbumById(int $id)
    {
        // Code pour récupérer un album depuis la base de données par son ID
        $db = self::getConnexion();
        if ($db !== null) {
            try {
                $sql = "SELECT title, artiste FROM albums WHERE id = :id";

                $stmt = $db->prepare($sql);
                
                $stmt->execute();

            } catch (\PDOException $err) {
                echo 'Erreur: ' . $err->getMessage();
            }
        }

    }

    // Méthode pour mettre à jour un album (UPDATE)
    public static function updateAlbum(int $id, string $title, string $artist)
    {
        // Code pour mettre à jour un album dans la base de données
        $db = self::getConnexion();
        if ($db !== null) {
            try {
                $sql = "UPDATE `albums` SET `id`='?',`title`='?',`artiste`='?', WHERE 1";

                $stmt = $db->prepare($sql);
                $stmt->execute();

            } catch (\PDOException $err) {
                echo 'Erreur: ' . $err->getMessage();
            }
        }

    }

    // Méthode pour supprimer un album par son ID 
    public static function deleteAlbum(int $id)
    {
        // Code pour supprimer un album de la base de données
        $db = self::getConnexion();
        if ($db !== null) {
            try {
                $sql = "DELETE FROM `albums` WHERE albums.id = :id";

                $stmt = $db->prepare($sql);
                $stmt->execute();

            } catch (\PDOException $err) {
                echo 'Erreur: ' . $err->getMessage();
            }
        }

    }
}
?>