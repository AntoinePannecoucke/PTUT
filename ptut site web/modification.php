<?php include 'Includes/config.php';?> 
<?php include 'Includes/checkLog.php';?> 
<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>Ptut</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php include 'modules/script.php';?> 
	</head> 

	<body class="cbp-spmenu-push"> 
		<div class="cbp-spmenu-push">
			<?php include 'Includes/NavLeft.php';?> 
			<?php include 'Includes/TopNav.php';?> 

			<div id="page-wrapper">
				<div class="main-page">
					<div class="forms">
						<h2 class="title1">Modification d'une oeuvre ou d'un beacon</h2>
						<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
							<div class="form-body">
								<form action="../modules/traitementModificationOeuvre.php" method="post" enctype="multipart/form-data"> 
									<legend>L'oeuvre</legend>

									<p class="help-block">Entrer le nom de l'oeuvre pour modifier sa description et sa langue</p>
									<div class="form-group"> 
										<label>Nom de l'oeuvre</label> 
										<input type="text" class="form-control"  name="titre"  required> 
									</div>

									<div class="form-group">
										<label >Description</label>
										<textarea name="description"  cols="50" rows="4" class="form-control1" required></textarea>
									</div> 

									<div class="form-group">
										<label for="selector1">Langue</label>
										<select name="Langue"  class="form-control1">
											<option value="Français">Français</option>
											<option value="Anglais">Anglais</option>
										</select>
									</div>	
								
									<button type="submit" class="btn btn-default">Modifier</button> 	
									<?php
										if(isset($_SESSION['oeuvre'])){
											echo $_SESSION['oeuvre'];
											$_SESSION['oeuvre'] = "";
										}
						 			?>
								</form>
							</div>
						</div>

						<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
							<div class="form-body">
								<form action="../modules/traitementModificationBeacon.php" method="post" enctype="multipart/form-data"> 
									<legend>Beacon</legend>

									<p class="help-block">Entrer le nom de l'oeuvre pour modifier l'adresse Mac de son beacon</p>
									<div class="form-group"> 
										<label>Nom de l'oeuvre</label> 
										<input type="text" class="form-control"  name="titre"  required> 
									</div>

									<div class="form-group"> 
										<label >Adresse MAC</label> 
										<input type="text" class="form-control" name="adresse" required> 
									</div>

									<div class="form-group"> 
										<label >Salle</label> 
										<input type="text" class="form-control"  name="salle" required> 
									</div>

									<button type="submit" class="btn btn-default">Modifier</button> 
									<?php
									if(isset($_SESSION['beacon'])){
										echo $_SESSION['beacon'];
										$_SESSION['beacon'] = "";
									}
						 			?>	
								</form> 
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include 'Includes/footer.php';?> 
		</div>
	</body>
</html>