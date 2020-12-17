<?php

include_once('../includes/header.php');
include_once('../includes/navbar.php');
include_once('../includes/helpers.php');
include_once('../connexiondb.php');





$query = $bdd->prepare('SELECT * FROM users JOIN publications ON publications.user_id = users.id_users WHERE publish_id = publish_id');


$query->execute();


$user = $query->fetch();



?>

<div class="profile-main">
    <div class="profile-header">
        <div class="user-detail">
            <div class="user-image">
                <img src="<?= $_SESSION['user']['img_profil']?>">
            </div>
            <div class="user-data">
                <h2> <?= $_SESSION['user']['first_name']?></h2>

                <p>Email :<?= $_SESSION['user']['email'] ?></p>


                <p type="password">Mot de passe : ******</p>

                <a href="update_profil.php" class="btn btn-primary" name="updateprofil" >Modfier</a>


            </div>
        </div>


            </div>


                    <ul>
                        <div class="bio-box mt-5">
                            <p class="label"> Inscrit depuis <?= $_SESSION['user']['created_at']?></p></p>
                            <div class="heading">
                                <p>Bio

                            </div>
                            <div class="desc">
                                <?= $_SESSION['user']['bio'] ?>
                            </div>
                    </ul>

    <ul>
        <div class="bio-box mt-5">
            <div class="heading">
                <p>Publications</p>
                <?php $publications = getPostByUser($_SESSION['user']['id_users']);?>
                <?php foreach ($publications as $publication){?>
                <hr>


                    <?php echo $publication['content'] ;}?>

                <div class="option">
                <?php if($_SESSION['user']['id_users'] == $publication['user_id']){ ?>

                    <a href="edit.php?update=true&post_id=<?php echo $publication['publish_id'] ?>" class="btn btn-primary" name="modif" >Modifier</a>
                    <a href="../src/controller/publication/action_delete.php?post_id=<?php echo $publication['publish_id'] ?>" class="btn btn-danger" name="delete" >supprimer</a>

                <?php } ?>
                <hr>
                </div>
            </div>



    </ul>
                </div>
