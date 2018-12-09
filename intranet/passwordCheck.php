<?php
session_start();
$location = "/intranet/";
$redirect = $_GET['redirect'];
if (isset($_POST['password']) AND pam_auth($_POST['username'], $_POST['password']))
{
	$_SESSION['loggedIn'] = true;
	$location .= $redirect;
	if(isset($_GET['param']))
	{
		$location .= "?";
		foreach ($_GET['param'] as $param => $value) {
			$location .= "$param=$value&";
		}
	}
}
else
	$location .= "login.php?err=wrongpassword&redirect=".$redirect;
header("location: $location");
?>