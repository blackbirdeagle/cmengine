<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

	if(isset($_POST["USER_ADD"])){
		$login = htmlspecialchars($_POST["USER_LOGIN"]);
		$hash = md5($_POST["USER_PASS"]);
		$name = htmlspecialchars($_POST["USER_NAME"]);

		$mysqli->query("INSERT INTO `".PREFIX."users` (`login`, `pass`, `name`) VALUES ('{$login}', '{$hash}', '{$name}')");
		header("Location: /admin/users/");
	}

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/templates/users/add.php");
?>