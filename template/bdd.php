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

$lien_video = "SELECT * FROM `video` ORDER BY `id` DESC";

$res_lien_video = $mysqli->query($lien_video);

if ($res_lien_video->num_rows > 0) {
while ($row = $res_lien_video->fetch_assoc()) {
	extract($row);
	$lien_derniere_video[] = $lien;
	$titre_derniere_video[] = $titre;
	$desc_derniere_video[] = $description;
}
}else {
	$lien_derniere_video[] = "<h1>Il n'y a pas de vidéo pour le moment</h1>";
	$titre_derniere_video[] = "";
	$desc_derniere_video[] = "";
}

?>