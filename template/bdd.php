<?php
$bdd_serveur='127.0.0.1';
$bdd_login='root';
$bdd_mot_de_passe=''; 
$bdd_nom='petanque';

$mysqli = new mysqli($bdd_serveur, $bdd_login, $bdd_mot_de_passe, $bdd_nom);

$voir = "SELECT `main_page` FROM `accueil`";

$res_voir = $mysqli->query($voir);

$accueuil = $res_voir->fetch_assoc();

$init_accueuil = $accueuil['main_page'];

$lien = "SELECT `lien` FROM `live`";

$res_lien = $mysqli->query($lien);

$live = $res_lien->fetch_assoc();

$init_live = $live['lien'];

?>