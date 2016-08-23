<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/services.class.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

	$service = new CServices($mysqli);
	if(isset($_GET["id"])){
		$serviceGet = $service->GetServiceByID($_GET["id"]);
	}

	if(isset($_POST["SERVICE_UPDATE"])){
		$id       = $_POST["SERVICE_ID"]; 
		$title    = $_POST["SERVICE_TITLE"];
		$keywords = $_POST["SERVICE_KEYWORDS"];
		$desc     = $_POST["SERVICE_DESC"];
		$key      = $_POST["SERVICE_KEY"];
		$h1       = $_POST["SERVICE_H1"];
		$text     = $_POST["SERVICE_TEXT"];

		if($_POST["SERVICE_BLOCK"] == "on") $block = 1;
		else $block = 0;
		$service->UpdateService($id, $title, $keywords, $desc, $key, $h1, $text, $block);

		header("Location: /admin/services/");		
	}
	$title = 'Редактирование услуги - '.$serviceGet["h1"];
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/services/edit.php");
?>