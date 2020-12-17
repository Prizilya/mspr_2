<?php
include_once('../includes/helpers.php');?>

<div class="my-3 p-3 bg-white z-depth-3">
    <p class="lead"> <?php echo $publication['content']?></p>

    <div class="d-flex text-muted pt-3">
    </div>

    <?php
    if(isset($publication['image'])) { ?>
        <img src="<?php echo $publication['image'] ?>" class="card-img-top" alt="...">
    <?php } ?>

    <small class="d-block text-end mt-3">

        <!-- Bouton like -->
        <a href="../src/controller/publication/action_like.php?post_id=<?php echo $publication['publish_id'] ?>&user_id=<?php $_SESSION['user']['id_users'] ?>"
           class="btn"  name="like" style="background-color: grey" onclick="event.preventDefault(); return like(<?php echo $publication['publish_id'] ?>)"><i class="fas fa-thumbs-up"></i></a>



        <!-- Bouton modifier/supprimer -->

        <?php if($_SESSION['user']['id_users'] == $publication['user_id']){ ?>

            <a href="edit.php?update=true&post_id=<?php echo $publication['publish_id'] ?>" class="btn btn-primary" name="modif" id="btnPopup" >Modifier</a>
            <a href="../src/controller/publication/action_delete.php?post_id=<?php echo $publication['publish_id'] ?>" class="btn btn-danger" name="delete" >supprimer</a>

        <?php } ?>
        <strong class="d-block text-gray-dark">     <h5 class="card-title mt-3" style="font-size: 10px">Publié par<a style="font-size: 10px" href="../pages/utilisateur.php?post_id=<?php echo $publication['id_users']?>"> <?php echo $publication['first_name']?> </p> </a></h5></strong>




    </small>

</div>
