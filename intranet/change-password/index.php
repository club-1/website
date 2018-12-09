<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change password</title>
	<?php include('../../head.php'); ?>
</head>
<body>
<?php
if (!empty($_SESSION['err']) && is_array($_SESSION['err'])) {
	echo "<ul>";
	foreach ($_SESSION['err'] as $err) {
		echo "<li>$err</li>";
	}
	unset($_SESSION['err']);
	echo "</ul>";
}
?>
	<?php include('../../background.php'); ?>
	<h1><a href="/">CLUB1</a>›<a href="/intranet/">Intranet</a>›Change password</h1>
	<form action="controller.php" method="post">
		<label>
			login
			<input type="text" name="username">
		</label>
		<label>
			old password
			<input type="password" name="password-old">
		</label>
		<label>
			new password
			<input type="password" name="password-new1">
		</label>
		<label>
			confirm new password
			<input type="password" name="password-new2">
		</label>
		<input type="submit" value="Valider" />
	</form>
</body>