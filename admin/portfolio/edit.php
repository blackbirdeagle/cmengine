<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/portfolio.class.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/formbuilder.class.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	$portfolio = new CPortfolio($mysqli);
	if(isset($_GET["id"])){
		$portfolioGet = $portfolio->GetPortfolioByID($_GET["id"]);
	}

	if(isset($_POST["PORTFOLIO_UPDATE"])){
		$id    = $_POST["PORTFOLIO_ID"]; 
		$name  = $_POST["PORTFOLIO_NAME"];
		$image = $_POST["PORTFOLIO_IMAGE"];

		if(isset($_FILES["PORTFOLIO_IMAGE"])){
			if(file_upload($_FILES["PORTFOLIO_IMAGE"], $_SERVER["DOCUMENT_ROOT"]."/upload/portfolio/")){
				$arr = explode(".", basename($_FILES["PORTFOLIO_IMAGE"]["name"]));
				$name_img = md5($arr[0]).".".$arr[1];
				$image = "/upload/portfolio/".$name_img;			
			}		
		}		
		
		if($_POST["PORTFOLIO_BLOCK"] == "on") $block = 1;
		else $block = 0;
		$portfolio->UpdatePortfolio($id, $name, $image, $block);

		header("Location: /admin/portfolio/");		
	}
	$ar_nav[] = array("/admin/portfolio/", "Портфолио");
	$ar_nav[] = array("", $portfolioGet["name"]);
	$title = 'Редактирование работы в портфолио';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/portfolio/edit.php");
?>