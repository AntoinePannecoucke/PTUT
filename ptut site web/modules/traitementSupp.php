<?php
include '../Includes/config.php';

if(isset($_POST)){
    	try {
    		$statement = $dbh->prepare("SELECT id_beacon id FROM Contenue  INNER JOIN Connexion ON Contenue.Id_contenue = Connexion.id_contenu WHERE UPPER(titre) LIKE :titre");
			$statement->execute(
				[
					'titre' => strtoupper($_POST['titre'])
				]
			);
			$result = $statement->fetch(); //id du beacon correspondant à l'ouvre

			if($result){
				$statement = $dbh->prepare("DELETE FROM Connexion WHERE id_beacon = :id_beacon ");
				$statement->execute(
					[
						'id_beacon' => $result['id']
					]
				);

				$statement = $dbh->prepare("DELETE FROM Contenue WHERE titre = :titre ");
				$statement->execute(
					[
						'titre' => $_POST['titre']
					]
				);

				$statement = $dbh->prepare("DELETE FROM Beacon WHERE Id_beacon = :id ");
				$statement->execute(
					[
						'id' => $result['id']
					]
				);

				$_SESSION['suppOeuvre'] = '<img src="../img/check.png">' . "<p style=\"color : green; font-weight:bold; display : inline-block; margin-left:0.5%;\">Suppression réussite</p>";
			}
			else{
				$_SESSION['suppOeuvre'] = '<img src="../img/cancel.png" >' . "<p style=\"color : red; font-weight:bold; display : inline-block; margin-left:0.5%;\">Échec de la suppression cause cette oeuvre n'est pas dans la base de données</p>";
			}
    	} catch (PDOException $e) {
        	echo 'Connexion échouée : ' . $e->getMessage();
   		}	
	}
	header('Location: ../supp.php');
	exit();