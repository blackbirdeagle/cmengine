<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/staticpages.class.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

	$pages = new CStaticPages($mysqli);
	$result = $pages->GetPages();
	$item = 1;
	$title = 'Административная панель - статические страницы';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/staticpage/pages.php");
?>