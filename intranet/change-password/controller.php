<?php
session_start();
$username = $_POST['username'];
$passwordOld = $_POST['password-old'];
$passwordNew1 = $_POST['password-new1'];
$passwordNew2 = $_POST['password-new2'];
$_SESSION['err'] = [];
$error = "";
if ($passwordNew1 != $passwordNew2) {
	array_push($_SESSION['err'], "passwords do not match");
	header("Location:./");
}
if (pam_auth($username, $passwordOld, $error, false)) {
	pam_chpass($username, $passwordOld, $passwordNew1, $error);
}
var_dump($error);
var_dump($_POST);
if (!empty($error)) {
	array_push($_SESSION['err'], $error);
}
// header("Location:./");

?>