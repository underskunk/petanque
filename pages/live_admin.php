<?php include "../template/header.php" ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-1 col-sm-0 col-xs-0">
		</div>
		<div class="col-md-10 col-sm-12 col-xs-12">
			<h1 class="center">Configuration du Live</h1>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="video-container">
						<form method="post">
							<label for="link">Entrez le code du live : </label>
							<input type="text" name="link">
							<input type="submit" name="lien">
						</form>

						<?php
						if (isset($_POST['lien'])) {
							$lien = "UPDATE `live` SET `lien`='".$_POST['link']."'";
							$res_lien = $mysqli->query($lien);
						}
						?>

					</div>
				</div>
			</div>
		</div>
		<div class="col-md-1 col-sm-0 col-xs-0">
		</div>
	</div>
</div>
<?php include "../template/footer.php" ?>