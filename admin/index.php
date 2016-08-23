<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");

	$enter = "";

	if(isset($_POST["logout"])){
		session_unset();
		session_destroy();
		header("Location: /admin/login.php");
	}

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
		$title = 'Административная панель';
	}
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/index.php");
?>