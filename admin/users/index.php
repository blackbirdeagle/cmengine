<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/users/user.class.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

	$user = new User($mysqli);
	$result = $user->GetUsers();
	$item = 1;

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/templates/users/users.php");
?>