<?php
include_once('../connexiondb.php');

session_start();





$query = $bdd->prepare('INSERT INTO commentaires (user_id, publish_id, content) VALUES (:user_id, :publish_id, :content)');

$query->bindValue(':user_id', $user);
$query->bindValue(':publish_id',$id);
$query->bindValue(':content',$id);



$query->execute();

header("Location: ../../../pages/feed.php");

?>