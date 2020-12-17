<?php
$bdd = new PDO("mysql:host=localhost;dbname=MSPR;charset=utf8", "root", "root");
include_once('../../../includes/helpers.php');

session_start();



$id = $_GET['post_id'];
$user = $_SESSION['user']['id_users'];




$query = $bdd->prepare('INSERT INTO likes (user_id, publish_id) VALUES (:user_id, :publish_id)');

$query->bindValue(':user_id', $user);
$query->bindValue(':publish_id',$id);


$query->execute();

if(isAjax()){
    echo 'succes';
} else {
    header('Location: /');
}

header("Location: ../../../pages/feed.php");

?>