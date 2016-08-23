<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/staticpages.class.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

	$page = new CStaticPages($mysqli);
	if(isset($_GET["id"])){
		$pageGet = $page->GetPageByID($_GET["id"]);
	}

	if(isset($_POST["PAGE_UPDATE"])){
		$id       = $_POST["PAGE_ID"]; 
		$title    = $_POST["PAGE_TITLE"];
		$keywords = $_POST["PAGE_KEYWORDS"];
		$desc     = $_POST["PAGE_DESC"];
		$key      = $_POST["PAGE_KEY"];
		$h1       = $_POST["PAGE_H1"];
		$text     = $_POST["PAGE_TEXT"];

		if($_POST["PAGE_BLOCK"] == "on") $block = 1;
		else $block = 0;
		$page->UpdatePage($id, $title, $keywords, $desc, $key, $h1, $text, $block);

		header("Location: /admin/staticpage/");		
	}
	$title = 'Редактирование страницы - '.$userGet["h1"];
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/staticpage/edit.php");
?>