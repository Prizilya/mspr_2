<?php

include_once ('../../../ConnexionDB.php');

$id = $_GET['post_id'];
$content = $_POST['content'];


$query = $bdd->prepare('UPDATE publications SET content = :content WHERE publish_id = :id');

$query->bindValue(':content', $content);
$query->bindValue(':id', $id);

$query->execute();

header('Location: ../../../pages/feed.php');

?>