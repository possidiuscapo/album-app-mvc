<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- <title>Page d'Accueuil</title> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    
    <div class="container">
        <!-- <h1>Liste des albums</h1> -->
        <div class="container">
            <h2>Modifier un album</h2>
            <form action="/update" method="post">
                <input type="hidden" name="id"  value='<?= $album[':id'] ?>'><br>
                <input type="text" class="form-control" name="title"  value="<?= $album['title'] ?>"><br>
                <input type="text" class="form-control" name="artiste"  value='<?= $album['artiste'] ?>'><br>
                <input type="submit" class="btn btn-primary" name="submit" value="Modifer">
            </form>
        </div>
    </div>
</body>

</html>