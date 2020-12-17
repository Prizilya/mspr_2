<?php include_once('../includes/header.php');
include_once('../includes/navbar.php');
include_once ('../ConnexionDB.php');

$id = $_SESSION['user']['id_users'];

$query = $bdd->prepare("select * from users where id_users=:id");

$query->bindValue(':id', $id);

$query->execute();

$user = $query->fetch();
?>

<div class="container px-5" style="margin : auto">
    <div class="row  w-50 h-50 p-5 mx-auto flex-column">


<form action="../src/controller/profil/action_update_profil.php?id=<?php echo $_SESSION['user']['id_users'] //dans la requête $users prendre id_userst ?>"
      method="post">
    <h1 class="text-center">Modifier mes informations</h1>
    <div class="form-group">
        <input type="text" value="<?php echo isset($user['first_name']) ?  $user['first_name'] : ''; ?>" name="first_name" class="form-control" placeholder="Prénom" required="required" >
    </div>
    <div class="form-group">
        <input type="text" value="<?php echo isset($user['last_name']) ?  $user['last_name'] : ''; ?>" name="last_name" class="form-control" placeholder="Nom"  >
    </div>

    <h2 class="text-center">Modifier mon email</h2>


    <div class="form-group">
        <input type="email" value="<?php echo isset($user['email']) ?  $user['email'] : ''; ?>" name="email" class="form-control" placeholder="Email"  >
    </div>

    <h2 class="text-center">Modifier mon mot de passe</h2>

    <div class="form-group">
        <input type="password"  name="password" class="form-control" placeholder="Mot de passe actuel"  >
    </div>
    <div class="form-group">
        <input type="password" name="newpassword" class="form-control" placeholder="Nouveau mot de passe" >
    </div>
    <div class="form-group">
        <button type="submit" name="btn" class="btn btn-primary btn-block  justify-content-center">Modifier les informations</button>
    </div>
</form>
        </div>
    </div
</div>