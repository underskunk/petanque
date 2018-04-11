<?php include "../template/header.php" ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
			<h1 class="center">Partenaires</h1>
			<div align="right">
				<button type="button" id="admin" class="btn btn-success" aria-label="Left Align"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">

					<div class="panel panel-default">
						<div class="panel-body">
							<div class="col-md-2 col-sm-2 col-xs-12">
								<img class="img-responsive" src="../img/logo.png">
							</div>
							<div class="col-md-10 col-sm-10 col-xs-12">
								<h3>
									<p><b>Nom de la Société</b></p>
									<p><b>Situation Géographique</b></p>
									<p><b>Activité</b></p>
									<p><b>Site</b></p>
								</h3>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="col-md-2 col-sm-2 col-xs-12">
								<img class="img-responsive" src="../img/logo.png">
							</div>
							<div class="col-md-10 col-sm-10 col-xs-12">
								<h3>
									<p><b>Nom de la Société</b></p>
									<p><b>Situation Géographique</b></p>
									<p><b>Activité</b></p>
									<p><b>Site</b></p>
								</h3>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="col-md-2 col-sm-2 col-xs-12">
								<img class="img-responsive" src="../img/logo.png">
							</div>
							<div class="col-md-10 col-sm-10 col-xs-12">
								<h3>
									<p><b>Nom de la Société</b></p>
									<p><b>Situation Géographique</b></p>
									<p><b>Activité</b></p>
									<p><b>Site</b></p>
								</h3>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>


<div id="popup" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
		<span class="close">&times;</span>
		<form method="post">
			<label for="nom_partenaire">Ajoutez le nom : </label>
			<input type="text" name="nom_partenaire"><br>
			<label for="logo_partenaire">Ajoutez le logo : </label>
			<input type="text" name="logo_partenaire"><br>
			<label for="lieu_partenaire">Ajoutez le lieu : </label>
			<input type="text" name="lieu_partenaire"><br>
			<label for="activité_partenaire">Ajoutez l'activité : </label>
			<input type="text" name="activité_partenaire"><br>
			<label for="site_partenaire">Ajoutez le site : </label>
			<input type="text" name="site_partenaire"><br>
			<input type="submit" name="partenaire">
		</form>
		<?php
		/*if (isset($_POST['video'])) {
			$lien = "INSERT INTO `video` (`lien`, `titre`, `description`) VALUES ('".$_POST['link_video']."', '".$_POST['titre_video']."', '".$_POST['desc_video']."')";
			$res_lien = $mysqli->query($lien);
		}*/
		?>
	</div>
</div>



<?php include "../template/footer.php" ?>