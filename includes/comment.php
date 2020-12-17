<hr>
<strong class="d-block text-gray-dark"><h5 class="card-title mt-3"><p style="font-size: 10px">Commentaires :</p> </h5></strong>
<p class="bd-primary">
    <?php echo $comment['content']?>
<hr>
</p>

<form action="../src/controller/publication/action_comment.php" method="post" class="form-signin
">
    <p>Ajouter un commentaire</p>
<div class="form-floating">
    <input type="textarea"  class="form-control"  id="floatingTextarea"></inputtextarea>
    <label for="Textarea">Comments</label>
    <button class="btn btn-primary btn-block" type="submit" value="submit" name="comment">envoyer</button>

</div>
</form>
