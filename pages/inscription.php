<?php

include_once('../includes/header.php');
include_once('../connexiondb.php');




?>

    <!-- Custom styles for this template -->
    <link href="../assets/css/inscription.css" rel="stylesheet">
    </head>
    <body class="connexion text-center">

    <form action="../src/controller/action_inscription.php" method="post" class="form-signin">
        <img class="mb-4" src="../assets/img/logo.png" alt="" width="72" height="72">

        <h1 class="h3 mb-3 font-weight-normal">Je m'inscris</h1>
        <div class="form-example">
            <input type="text" name="first_name" class="form-control" placeholder="Prénom" required="required" >
            <input type="text" name="last_name" class="form-control" placeholder="Nom" required="required" >
            <input type="email" name="email" class="form-control" placeholder="Email" required="required" >
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" >
            <input type="password" name="confpassword" class="form-control" placeholder="vérification du mot de passe" required="required" >
            </div>

            <div class="form-example center-align">
                <button class="btn btn-lg btn-primary btn-block center-align" type="submit" value="submit" name="save" >S'inscire</button>
            </div>
        <a href="connexion.php">J'ai déjà un compte.</a>
    </form>
    </body>



<?php if(isset($_GET['error'])){
    echo $_GET['error'];
}