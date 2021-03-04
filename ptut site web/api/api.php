<?php
// EF:E7:89:69:9D:C5
    include "../Includes/config.php";
    
    if (isset($_GET)){
        if (isset($_GET['key'])){
            try {
                $statement = $dbh->prepare("SELECT id_beacon FROM Beacon WHERE adresseMac LIKE :token");
			    $statement->execute ([
					'token' => $_GET['key']
				]);
                $result = $statement->fetch();
                if (isset($result['id_beacon'])){
                    $id_beacon = $result['id_beacon'];
                    $statement = $dbh->prepare("SELECT titre, description FROM Contenu cont JOIN Connexion con ON cont.id_contenu = con.id_contenu WHERE con.id_beacon = :id");
                    $statement->execute ([
                        'id' => $id_beacon
                    ]);
                    $result = $statement->fetch();
                    if(isset($result['titre']) && isset($result['description'])){
                        echo json_encode($result);
                    }
                }
            } catch (PDOException $e){
                echo json_encode($e);
            }
        }
    }

?>