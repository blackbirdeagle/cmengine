<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/portfolio.class.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

	$portfolio = new CPortfolio($mysqli);
	$result = $portfolio->GetPortfolio(2);
	$item = 1;
	$table = "portfolio";
	$title = 'Административная панель - портфолио';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/portfolio/portfolio.php");
?>