<?php

function getPostByUser($user_id){
$bdd = dbConnect();
$stmt = $bdd->prepare("SELECT * FROM publications WHERE user_id = :user_id");
$stmt->bindValue(':user_id', $user_id);
$stmt->execute();

return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
