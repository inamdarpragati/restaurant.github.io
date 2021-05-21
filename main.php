<?php
session_start();

$ID="admin";
$pass="2899";

if (isset($_POST["ID"]) && isset($_POST["pass"])) {
	if ($_POST["ID"] === $ID && $_POST["pass"] === $pass) {
		$_SESSION["inloggedin"]=true;

		header("Location: index.html");
		exit;


	}
	else if ($wrong="bad ID and Password , in the system could not log you in");
}
?>
