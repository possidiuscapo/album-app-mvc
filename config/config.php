<?php
// define('DB', $db);

try {
    $dsn = "mysql:host=localhost;dbname=album_app_mvc;";
    $db_username = "root";
    $db_password = "";
    $options = [
        PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC
    ];

    $db = new PDO(
        $dsn,
        $db_username,
        $db_password,
        $options
    );
    
    // $sql = "SELECT * FROM `users`";
    
    // // Nous informe quand il y a une erreur
    // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // //Nous renvoi toutes les données sous forme de tableau assoc
    // $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    // // $result = $db->query($sql);
    // // echo '<pre>';
    // /**
    //  * PDO::FETCH_*
    //  * PDO::FETCH_ASSOC: renvoi les resultats de rechercher sous forme de tableau associatif avec les noms de colonnes(champ) comme clé
    //  */
    // foreach ($db->query($sql, PDO::FETCH_OBJ) as $user) {
    //     echo '<pre>';
    //     // print_r($user);
    //     /** pour ::FETCH_OBJ */
    //     echo $user->id . " " . $user->user_name;
    //     /** pour ::FETCH_ASSOC */
    //     // echo $user['id'] . " " . $user['user_name'];
        
    //     echo '</pre>';
        
        
    // }
    // ;

    // $usname = "johndoe";
    // $upassword = password_hash("1234", PASSWORD_ARGON2I);
    // // marqueur de substitution (?)
    // // marqueur norme
    // $sql2 = "INSERT INTO users ( user_name, user_password) VALUES (?, ?);";

    // // préparer la requête pour assurer la sécurité
    // $stmt = $db->prepare($sql2);

    // // exécution de la requête préparée
    // $userAdded = $stmt->execute([$usname, $upassword]);
     
    // if ($userAdded) {
    //     $userAdded = "Utilisateur ajouté";
    // } else {
    //     $userAdded = "Utilisateur non ajouté";
    // }

    // $errorMessage = "";
    // die('Connexion à la base de données établi');
} catch (PDOException $error) {
    // echo '<pre>';
    // print_r($error);
    exit('Connexion à la base de données échoué ' . $error->getMessage()).'A la ligne '.$error->getLine();
}