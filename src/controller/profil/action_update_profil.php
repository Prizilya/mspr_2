<?php

include_once ('../../../ConnexionDB.php');


$id = $_GET['id'];

if (isset($_POST['btn'])){
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$newpassword = $_POST['newpassword'];


$query = $bdd->prepare('UPDATE users SET last_name = :last_name, first_name = :first_name, email = :email, password = :newpassword WHERE id_users = :id');

$query->bindValue(':last_name', $last_name);
$query->bindValue(':first_name', $first_name);
$query->bindValue(':email', $email);
$query->bindValue(':newpassword', sha1($newpassword));
$query->bindValue(':id', $id);

$query->execute();




header('Location: ../../../pages/profil.php');
}