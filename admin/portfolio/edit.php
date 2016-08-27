<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/portfolio.class.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

	$portfolio = new CPortfolio($mysqli);
	if(isset($_GET["id"])){
		$portfolioGet = $portfolio->GetPortfolioByID($_GET["id"]);
	}

	if(isset($_POST["PORTFOLIO_UPDATE"])){
		$id    = $_POST["PORTFOLIO_ID"]; 
		$name  = $_POST["PORTFOLIO_NAME"];
		$image = $_POST["PORTFOLIO_IMAGE"];

		if($_POST["PORTFOLIO_BLOCK"] == "on") $block = 1;
		else $block = 0;
		$portfolio->UpdatePortfolio($id, $name, $image, $block);

		header("Location: /admin/portfolio/");		
	}
	$title = 'Редактирование работы в портфолио';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/portfolio/edit.php");
?>