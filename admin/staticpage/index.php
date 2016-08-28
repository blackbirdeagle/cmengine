<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/staticpages.class.php");

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	$pages = new CStaticPages($mysqli);
	$result = $pages->GetPages(2);
	$ar_nav[] = array("/admin/staticpage/", "Статические страницы");
	$item = 1;
	$table = "staticpage";
	$title = 'Административная панель - статические страницы';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/staticpage/pages.php");
?>