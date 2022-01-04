<?php
require 'controller-index.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une image</title>
    <link rel="stylesheet" href="assets/uploadPreview.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <h1>Module d'enregistrement d'images</h1>
        <p>Mise en pratique PHP: Upload d'images</p>
    </header>

    <div class="formUpload">
        <p>Veuillez choisir une image</p>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input class="sendFile" type="submit" name="send" value="UPLOAD">
        </form>

    </div>

    <p class="comment"><?= $arrayMsg['msg'] ?? '' ?></p>

    <img id="preview">


    <script src="assets/uploadPreview.js"></script>

</body>

</html>