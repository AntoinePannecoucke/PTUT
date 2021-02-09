<?php
	include 'config.php';
	if(isset($_POST)){

		/*$dsn = 'mysql:dbname=p1926774;host=127.0.0.1';
    	$user = 'p1926774';
    	$password = '11926774';*/
    	try {
			$input_pwd =$_POST['email'];
			
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
					$_SESSION['name'] = $result['name'];
				
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