<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/services.class.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

	$services = new CServices($mysqli);
	$result = $services->GetServices();
	$item = 1;
	$title = 'Административная панель - услуги';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/services/services.php");
?>