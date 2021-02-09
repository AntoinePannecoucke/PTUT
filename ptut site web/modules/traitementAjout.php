<?php
include '../Includes/config.php';
if(isset($_POST)){
    	try {
			$statement = $dbh->prepare("INSERT INTO Contenu (id_contenu,titre,description,Langue) VALUES (null,:titre,:description,:Langue)");
			$statement->execute(
				[
					'titre' => $_POST['titre'],
					'description' => $_POST['description'],
					'Langue' => $_POST['Langue']
				]
			);

			$statement = $dbh->prepare("INSERT INTO Beacon (id_beacon,salle,adresseMac) VALUES (null,:salle,:adresseMac)");
			$statement->execute(
				[
					'salle' => $_POST['salle'],
					'adresseMac' => $_POST['adresse']
				]
			);


			$statement = $dbh->query("SELECT MAX(id_contenu) i FROM Contenu");
			$nbrContenu = $statement->fetch();

			$statement = $dbh->query("SELECT MAX(id_beacon) i FROM Beacon");
			$nbrBeacon = $statement->fetch();

			$statement = $dbh->prepare("INSERT INTO Connexion (id_contenu, id_beacon) VALUES (:id_contenu,:id_beacon)");
			$statement->execute(
				[
					'id_contenu' => $nbrContenu['i'],
					'id_beacon' => $nbrBeacon['i']
				]
			);

			$_SESSION['ajout'] = '<img src="../img/check.png">' . "<p style=\"color : green; font-weight:bold; display : inline-block; margin-left:0.5%;\">Ajout réussi</p>";

    	} catch (PDOException $e) {
        	$_SESSION['ajout'] = '<img src="../img/cancel.png" >' . "<p style=\"color : red; font-weight:bold; display : inline-block; margin-left:0.5%;\">Échec de l'ajout dans la base debase de données</p>";
   		}	
	}
	header('Location: ../ajout.php');
	exit();