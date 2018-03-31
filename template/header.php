<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Live-Petanque</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/video.css" rel="stylesheet">
	<link href="../css/popup.css" rel="stylesheet">
	<link href="../css/menu-wrapper.css" rel="stylesheet">
	<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
	<script>
	tinymce.init({
	  selector: '#mytextarea'
	});
	</script>
</head>
<body>
	<?php include "bdd.php" ?>
	<div id="wrapper">

		<!-- Sidebar -->
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li>
					<a href="accueil.php">Accueil</a>
				</li>
				<li>
					<a href="live.php">Live</a>
				</li>
				<li>
					<a href="video.php">Vidéos</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<a href="partenaire.php">Partenaires</a>
				</li>
			</ul>
		</div>
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">
			<div class="container-fluid">
				<a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"><button type="button" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></button></a>
			</div>