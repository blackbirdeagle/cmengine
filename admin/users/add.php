<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/users/user.class.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

	if(isset($_POST["USER_ADD"])){
		$login = $_POST["USER_LOGIN"];
		$pass = $_POST["USER_PASS"];
		$name = $_POST["USER_NAME"];

		$user = new User($mysqli);
		$user->AddUser($login, $pass, $name);

		header("Location: /admin/users/");
	}

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/templates/users/add.php");
?>