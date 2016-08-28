<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/user.class.php");

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	$user = new CUser($mysqli);
	if(isset($_GET["id"])){
		$userGet = $user->GetUserByID($_GET["id"]);
	}

	if(isset($_POST["USER_UPDATE"])){
		$id = $_POST["USER_ID"];
		$login = $_POST["USER_LOGIN"];
		$pass = $_POST["USER_PASS"];
		$name = $_POST["USER_NAME"];

		$user->UpdateUser($id, $login, $pass, $name);

		header("Location: /admin/users/");		
	}
	$title = 'Редактирование пользователя - '.$userGet["name"];
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/users/edit.php");
?>