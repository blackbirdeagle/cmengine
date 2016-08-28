<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/staticpages.class.php");

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	if(isset($_POST["PAGE_ADD"])){
		$title    = $_POST["PAGE_TITLE"];
		$keywords = $_POST["PAGE_KEYWORDS"];
		$desc     = $_POST["PAGE_DESC"];
		$key      = $_POST["PAGE_KEY"];
		$h1       = $_POST["PAGE_H1"];
		$text     = $_POST["PAGE_TEXT"];

		$page = new CStaticPages($mysqli);
		if($page->AddPage($title, $keywords, $desc, $key, $h1, $text)){
			header("Location: /admin/staticpage/");
		}else{
			$error = "Ошибка добавления!";
		}
	}
	$ar_nav[] = array("/admin/staticpage/", "Статические страницы");
	$ar_nav[] = array("", "Добавление страницы");
	$title = 'Административная панель - добавление статической страницы';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/staticpage/add.php");
?>