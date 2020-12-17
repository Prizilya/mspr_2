<?php

function getPublications(){

    $bdd = dbConnect();
    $stmt = $bdd->prepare('SELECT * FROM publications INNER JOIN users ON publications.user_id = users.id_users');
    $stmt->execute();
    return $stmt->fetchAll();

}

