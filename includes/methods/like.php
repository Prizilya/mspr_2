<?php

function isAjax()
{
return !empty($_SERVER['HTTP_X_REQUESTED-WITH'])
&& $_SERVER['HTTP_X_REQUESTED-WITH'] ==='XLMHttprequest';
}





function getLikeByPublish($publish_id){
$bdd = dbConnect();
$stmt = $bdd->prepare("SELECT * FROM likes WHERE publish_id = :publish_id AND user_id = :user_id ");
$stmt->bindValue(':publish_id', $publish_id);
$stmt->bindValue(':user_id', $_SESSION['user']['user_id']);
$stmt->execute();

return $stmt->fetch();
}