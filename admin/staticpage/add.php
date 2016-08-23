<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/staticpages.class.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

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
	$title = 'Административная панель - добавление статической страницы';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/staticpage/add.php");
?>