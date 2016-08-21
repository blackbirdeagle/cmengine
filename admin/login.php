<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");

$error = "";
if(isset($_POST["auth"])){

	$login = $_POST["login"];
	$hash = md5($_POST["pass"]);

	$result_set = $mysqli->query("SELECT * FROM `".PREFIX."users` WHERE `login` = '{$login}' AND `pass` = '{$hash}'");
	if($user = $result_set->fetch_assoc()){
		$_SESSION["USER"] = $user["name"];
		header("Location: /admin/");
	}else{
		$error = "<p style = 'color: red;'>Неверный логин или пароль</p>";
	}	

}

require_once($_SERVER["DOCUMENT_ROOT"]."/admin/templates/login.php");
?>
