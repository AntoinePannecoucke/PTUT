<?php 
	if($_SESSION['connected']){
	}
	else{
		header('Location: ../login.php');
	}
?>