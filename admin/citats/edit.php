<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/citats.class.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

	$citata = new CCitats($mysqli);
	if(isset($_GET["id"])){
		$citataGet = $citata->GetCitataByID($_GET["id"]);
	}

	if(isset($_POST["CITATA_UPDATE"])){
		$id     = $_POST["CITATA_ID"]; 
		$text   = $_POST["CITATA_TEXT"];
		$author = $_POST["CITATA_AUTHOR"];

		if($_POST["CITATA_BLOCK"] == "on") $block = 1;
		else $block = 0;
		$citata->UpdateCitata($id, $text, $author, $block);

		header("Location: /admin/citats/");		
	}
	$title = 'Редактирование цитаты';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/citats/edit.php");
?>