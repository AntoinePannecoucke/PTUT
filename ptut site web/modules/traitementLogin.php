<?php
include '../Includes/config.php';
	//include "../modules/crypt_password.php";
	if(isset($_POST)){
    	try {
			$input_pwd = $_POST['email'];
        	
			$statement = $dbh->prepare("SELECT password, username FROM users WHERE email = :email");
			$statement->execute (
				[
					'email' => $input_pwd
				]
			);
			$result = $statement->fetch();

			if ($result){
				if (password_verify($_POST['password'],$result['password'])){
					$_SESSION['connected'] = true;
					$_SESSION['name'] = $result['username'];
					header('Location: ../index.php');
				}
				else {
					header('Location: ../login.php');
				}
			}
			else {
				header('Location: ../login.php');
			}
    	} catch (PDOException $e) {
        	echo 'Connexion échouée : ' . $e->getMessage();
   		}	
	}
	exit();
?>