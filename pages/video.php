<?php include "../template/header.php" ?>
<div class="container-fluid">
	<div class="row">

		<div class="col-md-1 col-sm-0 col-xs-0">
		</div>
		<div class="col-md-10 col-sm-12 col-xs-12">
			<h1 class="center">Vidéos</h1>
			<div align="right">
				<button type="button" id="admin" class="btn btn-success" aria-label="Left Align"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-md-6 col-sm-8 col-xs-12">
						<div class="video-container">
							<?php echo $lien_derniere_video[0]; ?>
						</div>
					</div>
					<div class="col-md-6 col-sm-4 col-xs-12">
						<h2>Dernière Vidéo :</h2>
						<?php echo $titre_derniere_video[0]; ?><br>
						<?php echo $desc_derniere_video[0]; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-1 col-sm-0 col-xs-0">
		</div>
	</div>
</div>



<div class="container-fluid">
<?

foreach ($lien_derniere_video as $value) {
	if ($value != $lien_derniere_video[0]){

?>

	<div class="row">
		<div class="col-md-1 col-sm-0 col-xs-0">
		</div>
		<div class="col-md-10 col-sm-12 col-xs-12">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="video-container">
					<?php echo $value; ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="video-container">
					<?php echo $value; ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="video-container">
					<?php echo $value; ?>
				</div>
			</div>
		</div>
		<div class="col-md-1 col-sm-0 col-xs-0">
		</div>
	</div>

<?
	}
}

?>

</div>



<div id="popup" class="modal">

	<!-- Modal content -->
	<div class="modal-content">
		<span class="close">&times;</span>
		<form method="post">
			<label for="link_video">Ajoutez la vidéo : </label>
			<input type="text" name="link_video"><br>
			<label for="titre_video">Ajoutez le titre de la vidéo : </label>
			<input type="text" name="titre_video"><br>
			<label for="desc_video">Ajoutez la description de la vidéo : </label>
			<input type="text" name="desc_video"><br>
			<input type="submit" name="video">
		</form>
		<?php
		if (isset($_POST['video'])) {
			$lien = "INSERT INTO `video` (`lien`, `titre`, `description`) VALUES ('".$_POST['link_video']."', '".$_POST['titre_video']."', '".$_POST['desc_video']."')";
			$res_lien = $mysqli->query($lien);
		}
		?>
	</div>
</div>



<?php include "../template/footer.php" ?>