<?php
$redirect = "?redirect=";
if (isset($_GET['redirect']))
	$redirect = $redirect . $_GET['redirect'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Page protégée par mot de passe</title>
		<?php include('../head.php'); ?>
	</head>
	<body>
		<?php include('../background.php'); ?>	
		<p>Entre le bon mot de passe pour accéder aux informations:</p>
		<form action="passwordCheck.php<?= $redirect ?>" method="post">
			<label>
				username
				<input type="text" name="username" autofocus required />
			</label>
			<label>
				password
				<input type="password" name="password" required />
			<label>
			<input type="submit" value="Valider" />
		</form>
	</body>
</html>