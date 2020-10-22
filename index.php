<?php
//charge les dependances php
require_once 'vendor/autoload.php';

use Carbon\Carbon;


//transforme le texte en date
$date = Carbon::make('2020-09-29 11:50:30')->locale('fr_FR');


//affiche la date en text (il y'a 3mois)
 echo $date->diffForHumans();