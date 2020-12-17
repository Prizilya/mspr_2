
<?php

$bdd = new PDO("mysql:host=localhost;dbname=MSPR;charset=utf8", "root", "root");


function dbConnect(){
    return new PDO("mysql:host=localhost;dbname=MSPR;charset=utf8", "root", "root");
}