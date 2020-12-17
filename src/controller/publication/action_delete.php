<?php include_once ('../../../connexiondb.php');




    $id = $_GET['post_id'];


if(isset($id)):  // si $id existe

    $query = $bdd->prepare("DELETE FROM publications WHERE publish_id = $id");
    $query->execute();

    header('Location: ../../../pages/feed.php');

else:
    echo 'error';  //sinon on affiche erreur
    die();
endif;