<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/services.class.php");

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	$services = new CServices($mysqli);
	$result = $services->GetServices(2);
	$ar_nav[] = array("/admin/services", "Услуги");
	$item = 1;
	$table = "services";
	$title = 'Административная панель - услуги';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/services/services.php");
?>