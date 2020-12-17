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
                <img src="<?= $user['img_profil']?>">
            </div>
            <div class="user-data">
                <h2> <?= $user['first_name']?></h2>

                <p>Email :<?= $user['email'] ?></p>


                <p type="password">Mot de passe : ******</p>




            </div>
        </div>


    </div>


    <ul>
        <div class="bio-box mt-5">
            <div class="heading">
                <p>Bio
                    <label>Inscrit depuis <? $user['created_at']?></label></p>
            </div>
            <div class="desc">
                <?= $user['bio'] ?>
            </div>
    </ul>

    <ul>
        <div class="bio-box mt-5">
            <div class="heading">
                <p>Publications</p>

                <?php $publications = getPostByUser($user['id_users']);?>
                <?php foreach ($publications as $publication){?>
                    <hr>


                    <?php echo $publication['content'] ;}?>

            </div>
            <div class="desc">

            </div>
    </ul>
</div>
