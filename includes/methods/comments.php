

<?php

function getCommentsFromPost($publish_id)
{
    $bdd = new PDO("mysql:host=localhost;dbname=MSPR;charset=utf8", "root", "root");
    $query = $bdd->prepare('SELECT * FROM commentaires WHERE publish_id = :publish_id ');
    $query->bindParam(':publish_id', $publish_id);
    $query->execute();

    return $query->fetchAll();
}