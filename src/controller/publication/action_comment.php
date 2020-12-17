<?php
include_once('../../../connexiondb.php');

session_start();

if (isset($_POST['comment'])) {

    $content = $_POST['content'];
    $user_id = $_POST['user_id'];
    $publish_id = $_POST['publish_id'];


    $query = $bdd->prepare("INSERT INTO commentaires(content, user_id, publish_id) VALUES (:content, :user_id, :publish_id);");


    $query->bindValue(':content', $content);
    $query->bindValue(':user_id', $user_id);
    $query->bindValue(':publish_id', $publish_id);


    $query->execute();


header("Location: ../../../pages/feed.php");


}
