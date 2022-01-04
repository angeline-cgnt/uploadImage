<?php
$arrayExt = ['jpg', 'jpeg', 'png', 'gif'];
$arrayMsg = [];
$maxSizeFile = 1000000;

$id = uniqid();

if (isset($_FILES['fileToUpload'])) {
    $tmpName = $_FILES['fileToUpload']['tmp_name'];
    $name = $_FILES['fileToUpload']['name'];
    $size = $_FILES['fileToUpload']['size'];
    $type = $_FILES['fileToUpload']['type'];
    $error = $_FILES['fileToUpload']['error'];
    $ext = substr(strrchr($type, '/'), 1);

    if ($error == 0) {
        $typeImg = getimagesize($tmpName);

        if ($typeImg !== false && in_array($ext, $arrayExt)) {
            if ($size < $maxSizeFile) {
                move_uploaded_file($tmpName, "img/$id-$name");
                $arrayMsg['msg'] = 'Fichier ajouté';
            } else {
                $arrayMsg['msg'] = 'Fichier trop volumineux. Veuillez en choisir un autre.';
            }
        } else {
            $arrayMsg['msg'] = 'Format de fichier non valide. Veuilez en choisir un autre.';
        }
    } 
}