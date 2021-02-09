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

			if ($result){

				$statement = $dbh->prepare("UPDATE Beacon SET adresseMac = :adresse, salle = :salle WHERE Id_beacon = :id");
				$statement->execute(
					[
						'adresse' => $_POST['adresse'],
						'salle' => $_POST['salle'],
						'id' => $result['id']
					]
				);
				$_SESSION['beacon'] = '<img src="../img/check.png">' . "<p style=\"color : green; font-weight:bold; display : inline-block; margin-left:0.5%;\">Modification réussite</p>";
			}
			else{
				$_SESSION['beacon'] = '<img src="../img/cancel.png" >' . "<p style=\"color : red; font-weight:bold; display : inline-block; margin-left:0.5%;\">Échec de la modification cause cette oeuvre n'est pas dans la base de données</p>"; 
			}

    	} catch (PDOException $e) {
        	echo 'Connexion échouée : ' . $e->getMessage();
   		}	
	}
	header('Location: ../modification.php');
	exit();