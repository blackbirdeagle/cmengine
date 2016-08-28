<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/portfolio.class.php");

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");
	
	$portfolio = new CPortfolio($mysqli);
	$result = $portfolio->GetPortfolio(2);
	$ar_nav[] = array("/admin/portfolio/", "Портфолио");
	$item = 1;
	$table = "portfolio";
	$title = 'Административная панель - портфолио';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/portfolio/portfolio.php");
?>