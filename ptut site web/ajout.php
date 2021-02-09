<?php include 'Includes/config.php';?> 
<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms :: w3layouts</title>
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
						<h2 class="title1">Ajout d'une oeuvre et son beacon</h2>
						<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
							<div class="form-body">
								<form action="../modules/traitementAjout.php" method="post" enctype="multipart/form-data"> 
									<legend>L'oeuvre</legend>

									<div class="form-group"> 
										<label>Titre de l'oeuvre</label> 
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

									<fieldset>
										<legend>Beacon</legend>

										<div class="form-group"> 
											<label >Salle</label> 
											<input type="text" class="form-control"  name="salle" required> 
										</div>

										<div class="form-group"> 
											<label >Adresse MAC</label> 
											<input type="text" class="form-control" name="adresse" required> 
										</div>
									</fieldset>
									<button type="submit" class="btn btn-default">Ajouter</button>
									<?php
										if(isset($_SESSION['ajout'])){
											echo $_SESSION['ajout'];
											$_SESSION['ajout'] = "";
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