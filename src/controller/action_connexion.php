
<?php

    include_once('../../connexiondb.php');


session_start();


$stmt = $bdd->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
$stmt->bindValue(':email', $_POST['email']);
$stmt->bindValue(':password', sha1($_POST['password']));

$stmt->execute();

$_SESSION['user'] = $stmt->fetch();


if ($_SESSION['user']) {
    header("Location: ../../pages/feed.php");
} else header("Location: ../../pages/connexion.php");

?>