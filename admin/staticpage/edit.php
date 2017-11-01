<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/staticpages.class.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/formbuilder.class.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

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
	$ar_nav[] = array("/admin/staticpage/", "Статические страницы");
	$ar_nav[] = array("", $pageGet["seo_title"]);
	$title = 'Редактирование страницы - '.$pageGet["seo_title"];
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/staticpage/edit.php");
?>