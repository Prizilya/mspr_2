<?php

$query = $bdd->prepare('SELECT * FROM users JOIN publications ON publications.user_id = users.id_users WHERE publish_id = publish_id');


$query->execute();


$user = $query->fetch();?>

<nav class="navbar navbar-expand-md navbar-light bg-light ">
    <div class="container-fluid  ">

        <a class="navbar-brand" href="../pages/feed.php">Bonjour <?php echo $_SESSION['user']['first_name'] ?></a>
        <li><img width="10%" src="<?= $_SESSION['user']['img_profil']?>" class="img-responsive"></li>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0 ">
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="../pages/feed.php">Publications</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="../pages/profil.php">Mon profil</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="../pages/deconnexion.php">Se deconnecter</a>
                </li>

        </div>

    </div>
</nav>
