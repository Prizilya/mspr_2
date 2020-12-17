<?php include_once ('../includes/header.php');
include_once('../connexiondb.php');



?>

<link href="../assets/css/connexion.css" rel="stylesheet">
</head>
<body class="connexion text-center" >

<form action="../src/controller/action_connexion.php" method="post" class="form-signin">
    <img class="mb-4" src="../assets/img/logo.png" alt="" width="72" height="72">

    <h1 class="h3 mb-3 font-weight-normal">Je me connecte</h1>
    <div class="form-example">
        <label for="inputEmail" class="sr-only" name="email">Votre email </label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only" name="password">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        <div class="checkbox mb-3">
    </div>
    <label>
        <input type="checkbox" value="remember-me"> Remember me
    </label>
    <div class="form-example">
        <button class="btn btn-lg btn-primary btn-block " type="submit" value="submit">Se connecter</button>
    </div>
        <a href="inscription.php">Nouveau membre ?</a>

</form>
</body>