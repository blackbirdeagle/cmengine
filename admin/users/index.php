<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/user.class.php");

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	$user = new CUser($mysqli);
	$result = $user->GetUsers(0);
	$item = 1;
	$title = 'Административная панель - список пользователей';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/users/users.php");
?>