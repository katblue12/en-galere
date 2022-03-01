<?php


require './vue/theParty.php';
require './model/partyClass.php';
require './config/connexionBdd.php';

$party = new Partyitem($image_party,$name_party,$description_party,$recipe_party,$method_party);
$party->readParty($bdd);



var_dump($party);










   
   
?>
