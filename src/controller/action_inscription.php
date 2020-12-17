<?php
//fichier reqûete pour l'ajout d'un nouveau produit
include_once ('../../connexiondb.php');



session_start();



if (isset($_POST['save'])){
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confpassword = $_POST['confpassword'];

    $stmt = $bdd->prepare('SELECT * FROM users WHERE email = :email');

    $stmt->bindValue(':email', $email);

    $stmt->execute();

    $row = $stmt->fetch();

    if ($row){
        $er_mail = "Ce mail existe déjà";
        header('Location: ../../pages/inscription.php?error='.$er_mail);
        return;
    }

    // Vérification du mot de passe
    if(empty($password)) {
        $er_mdp = "Le mot de passe ne peut pas être vide";
        header('Location: ../../pages/inscription.php?error='.$er_mdp);
        return;
    }elseif($password != $confpassword){
        $er_mdp = "La confirmation du mot de passe ne correspond pas";
        header('Location: ../../pages/inscription.php?error='.$er_mdp);
        return;
    }

    $query = $bdd->prepare("INSERT INTO users(last_name, first_name, email, password) VALUES (:last_name, :first_name, :email, :password);");
// Bindvalue -> On execute la requête en associant des variables : On attache la valeur :Name à la variable $name

    $query->bindValue(':last_name', $last_name);  //data_type -> on précise le paramètre STR -> string Int -> Integer
    $query->bindValue(':first_name', $first_name);
    $query->bindValue(':email', $email);
    $query->bindValue(':password', sha1($password));

    $query->execute();

    header('Location: ../../pages/connexion.php');

}
?>