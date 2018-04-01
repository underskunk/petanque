<?php include "../template/header.php" ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
			<h1 class="center">Contact</h1>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-md-1 col-sm-3 col-xs-12">
						<img class="img-responsive" src="../img/logo.png">
					</div>
					<div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<p>Nom de société :</p>
								<p>Nom :</p>
								<p>Prénom :</p>
								<p>E-mail :</p>
								<p>Téléphone :</p>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h2>Envoyer un E-mail</h2>
						<form>
							<div class="form-group">
								<label for="InputEmail">Adresse E-mail</label>
								<input type="email" class="form-control" id="InputEmail" placeholder="Entrez votres E-mail ici">
							</div>
							<div class="form-group">
								<label for="InputText">E-mail</label>
								<textarea type="text" class="form-control" id="InputText" placeholder="Entrez votres text ici" rows="6"></textarea>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include "../template/footer.php" ?>