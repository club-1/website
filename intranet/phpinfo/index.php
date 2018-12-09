<?php
session_start();
if (!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn'])
	header('location: /intranet/login.php?redirect=phpinfo/');
phpinfo();
?>
