<?php include "../template/header.php" ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-1 col-sm-0 col-xs-0">
		</div>
		<div class="col-md-10 col-sm-12 col-xs-12">
			<h1 class="center">Live</h1>
			<div align="right">
				<button type="button" id="admin" class="btn btn-success" aria-label="Left Align"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="video-container">
						<?php echo $init_live; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-1 col-sm-0 col-xs-0">
		</div>
	</div>
</div>

<div id="popup" class="modal">

	<!-- Modal content -->
	<div class="modal-content">
		<span class="close">&times;</span>
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

<?php include "../template/footer.php" ?>