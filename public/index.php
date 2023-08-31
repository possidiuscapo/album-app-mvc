<?php
require "../config/config.php";

if (!empty($_POST['submit'])) {
    if (!empty($_POST['user']) && !empty($_POST['pwd'])) {
        $username = htmlspecialchars($_POST['user']);
        $userpwd = password_hash($_POST['pwd'], PASSWORD_ARGON2I);

        $sql2 = "INSERT INTO users ( user_name, user_password) VALUES (?, ?);";
        $stmt = $db->prepare($sql2);
        $userAdded = $stmt->execute([$username, $userpwd]);
    } else {

    }

} else {

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Page d'Accueuil</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container-fuild mt-3">
        <form action="index.php" method="post">
            <div class="container">
                <div class="mb-3">
                    <label for="users" class="form-label fw-bold fs-4">Nom d'utilisateur</label>
                    <input type="text" class="form-control" name="user" id="users">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fw-bold fs-4">Password</label>
                    <input type="password" class="form-control" name="pwd" id="password">
                </div>
                <!-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <button type="submit" class="btn btn-primary w-100 fw-bold fs-4" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>