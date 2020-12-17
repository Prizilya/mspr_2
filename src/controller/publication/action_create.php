<?php
include_once('../../../connexiondb.php');


session_start();

$uploads_dir = '/mspr2_/includes/uploads';

foreach ($_FILES as $file) {

        $tmp_name = $file["tmp_name"];

        // basename() peut empêcher les attaques de système de fichiers;
        // la validation/assainissement supplémentaire du nom de fichier peut être approprié
        $name = basename($file["name"]);


        $path = "$uploads_dir/$name";
        $full_path = $_SERVER['DOCUMENT_ROOT'] . $path;

        $status = move_uploaded_file($tmp_name, $full_path);

}



if (isset($_POST['send'])){
    $content = $_POST['content'];
    $user = $_SESSION['user']['id_users'];
    $image = $path;



$query = $bdd->prepare("INSERT INTO publications(content, user_id, image) VALUES (:content, :user_id, :image);");
// Bindvalue -> On execute la requête en associant des variables : On attache la valeur :Name à la variable $name

$query->bindValue(':content', $content);
$query->bindValue(':user_id', $user);
$query->bindValue(':image', $path);

$query->execute();


header('Location: ../../../pages/feed.php');

}



?>