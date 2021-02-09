<?php include 'Includes/config.php';?> 
<?php include 'Includes/checkLog.php';?> 
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
						<h2 class="title1">Suppression d'une oeuvre et son beacon</h2>
						<div class="form-grids row widget-shadow"> 
							<div class="form-body">
								<form action="../modules/traitementSupp.php" method="post" enctype="multipart/form-data"> 
									<legend>L'oeuvre</legend>

									<div class="form-group"> 
										<label>Nom de l'oeuvre</label> 
										<input type="text" class="form-control"  name="titre"  required> 
									</div>

									<button type="submit" class="btn btn-default">Supprimer</button> 	
									<?php
										if(isset($_SESSION['suppOeuvre'])){
											echo $_SESSION['suppOeuvre'];
											$_SESSION['suppOeuvre'] = "";
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