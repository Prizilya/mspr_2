<?php
include_once('../includes/header.php');
include_once('../includes/navbar.php');

?>



<form action="../src/controller/publication/<?php echo isset($_GET['update']) ? 'action_modif' : 'action_create' ?>.php
<?php echo isset($_GET['update']) ? '?post_id='.$_GET['post_id'] : '' ?>" method="post" enctype="multipart/form-data" id="overlay">

<textarea id="story" name="content" placeholder="Ecrire un texte"
          rows="5" cols="33">
</textarea>


    <div class="form-group">
        <button type="submit" name="send" class="btn btn-primary">Publier</button>
    </div>

    <input type="file" name="image" id="photo">

</form>

