<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Login Page :: w3layouts</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php include 'modules/script.php';?> 
	</head> 

	<body >
		<div class="main-content">
			<div id="page-wrapper">
				<div class="main-page login-page ">
					<h2 class="title1">Login</h2>
					<div class="widget-shadow">
						<div class="login-body">
							<form action="../modules/traitementLogin.php" method="post">
								<input type="email" class="user" name="email" placeholder="email" required>
								<input type="password" name="password" class="lock" placeholder="password" required>
								<input type="submit" name="Sign In" value="Sign In">
							</form>
						</div>
					</div>
				</div>
			</div>
			<?php include 'Includes/footer.php';?> 
		</div>
	</body>
</html>