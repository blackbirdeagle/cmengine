<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/user.class.php");

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	if(isset($_POST["USER_ADD"])){
		$login = $_POST["USER_LOGIN"];
		$pass = $_POST["USER_PASS"];
		$name = $_POST["USER_NAME"];

		$user = new CUser($mysqli);
		$user->AddUser($login, $pass, $name);

		header("Location: /admin/users/");
	}
	$title = 'Административная панель - добавление пользователя';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/users/add.php");
?>