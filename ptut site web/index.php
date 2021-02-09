<?php include 'Includes/config.php';?> 
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
					<h2 class="title1"> Voici les oeuvres :</h2>
					<div class="panel-group tool-tips widget-shadow" >
						<?php 
							try {
								$dbh = new PDO('sqlite:data.db',$user,$password,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
								$statement = $dbh->query("SELECT titre,description,langue FROM Contenue");

								while($row = $statement->fetch()){
									echo '<div class="panel panel-default">';
										echo '<div class="panel-heading">';
											echo '<h4 style ="font-weight:bold;" >';
												echo  $row['titre'];
											echo '</h4>';
										echo '</div>';

										echo ' <div class="panel-body">';
											echo "Langue : ".$row['langue'] . "<br>" . $row['description'];
										echo '</div>';
									echo '</div>';
								}
							} 
							catch (PDOException $e) {
							    echo 'Connexion échouée : ' . $e->getMessage();
							}	
						?>
					</div>
				</div>
			</div>
		</div>
		<?php include 'Includes/footer.php';?> 
	</body>
</html>