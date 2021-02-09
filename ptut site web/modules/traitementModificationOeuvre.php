<?php 
include '../Includes/config.php';

if(isset($_POST)){
    	try {
			$statement = $dbh->prepare("SELECT titre FROM Contenu WHERE UPPER(titre) LIKE :titre");
			$statement->execute(
				[
					'titre' => strtoupper($_POST['titre'])
				]
			);
			$result = $statement->fetch();

			if ($result){

				$statement = $dbh->prepare("UPDATE Contenu SET description = :description, langue = :langue WHERE UPPER(titre) LIKE :titre");
				$statement->execute(
					[
						'description' => $_POST['description'],
						'langue' => $_POST['Langue'],
						'titre' => strtoupper($_POST['titre'])
					]
				);
				$_SESSION['oeuvre'] = '<img src="../img/check.png">' . "<p style=\"color : green; font-weight:bold; display : inline-block; margin-left:0.5%;\">Modification réussite</p>";
			}
			else{
				$_SESSION['oeuvre'] = '<img src="../img/cancel.png" >' . "<p style=\"color : red; font-weight:bold; display : inline-block; margin-left:0.5%;\">Échec de la modification cause cette oeuvre n'est pas dans la base de données</p>";
			}
    	} catch (PDOException $e) {
        	echo 'Connexion échouée : ' . $e->getMessage();
   		}	
	}
	header('Location: ../modification.php');
	exit();