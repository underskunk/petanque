<?php include "../template/header.php" ?>
<?php include "../template/bdd.php" ?>
<?php $rank = 1; ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-1 col-sm-0 col-xs-0">
		</div>
		<div class="col-md-10 col-sm-12 col-xs-12">
			<h1 class="center">Accueil</h1>
			<?php 
			if ($rank === 1) {
				echo '
			<div align="right">
				<a href="accueil_admin.php"><button type="button" class="btn btn-success" aria-label="Left Align"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></a>
			</div>';
		} 
		?>
			<div class="panel panel-default">
				<div class="panel-body">
					<?php echo $init_accueuil; ?>
				</div>
			</div>
		</div>
		<div class="col-md-1 col-sm-0 col-xs-0">
		</div>
	</div>
</div>
<?php include "../template/footer.php" ?>