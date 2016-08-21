<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

	$result_set = $mysqli->query("SELECT * FROM `".PREFIX."users`");
	$item = 1;

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/templates/users/users.php");
?>