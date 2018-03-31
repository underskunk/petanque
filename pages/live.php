<?php include "../template/header.php" ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-1 col-sm-0 col-xs-0">
		</div>
		<div class="col-md-10 col-sm-12 col-xs-12">
			<h1 class="center">Live</h1>
			<div align="right">
				<a href="accueil_admin.php"><button type="button" class="btn btn-success" aria-label="Left Align"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></a>
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
<?php include "../template/footer.php" ?>