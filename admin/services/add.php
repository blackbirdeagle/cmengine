<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/services.class.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

	if(isset($_POST["SERVICE_ADD"])){
		$title    = $_POST["SERVICE_TITLE"];
		$keywords = $_POST["SERVICE_KEYWORDS"];
		$desc     = $_POST["SERVICE_DESC"];
		$key      = $_POST["SERVICE_KEY"];
		$h1       = $_POST["SERVICE_H1"];
		$text     = $_POST["SERVICE_TEXT"];

		$service = new CServices($mysqli);
		if($service->AddService($title, $keywords, $desc, $key, $h1, $text)){
			header("Location: /admin/services/");
		}else{
			$error = "Ошибка добавления!";
		}
	}
	$title = 'Административная панель - добавление услуги';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/services/add.php");
?>