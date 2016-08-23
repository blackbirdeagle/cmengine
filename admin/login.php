<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/core/user.class.php");

$error = "";
if(isset($_POST["auth"])){

	$user = new CUser($mysqli);

	if($user->ValidateUser($_POST["login"], $_POST["pass"])){
		$_SESSION["USER"] = $user->name;
		$_SESSION["HASH"] = $user->hash;
		header("Location: /admin/");
	}else{
		$error = "<p style = 'color: red;'>Неверный логин или пароль</p>";
	}	
}

require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/login.php");
?>
