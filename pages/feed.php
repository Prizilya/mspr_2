<?php

include_once('../includes/header.php');
include_once('../includes/navbar.php');
include_once('../includes/helpers.php');
include_once('../connexiondb.php');



if (!$_SESSION['user']) header('Location: ../pages/connexion.php');

?>


<main class="container mt-5">
    <?php require '../pages/edit.php';?>

    <div class="my-3 p-3 bg-light rounded shadow-sm">
        <h6 class="border-bottom text-dark pb-2 mb-0 ">Publications récentes</h6>
    <?php foreach (getPublications() as $publication) { ?>

            <?php require '../includes/publication.php';

            ?>



     <?php } ?>

</main>

<?php include_once('../includes/footer.php'); ?>