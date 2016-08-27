<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/core/portfolio.class.php");

$portfolio = new CPortfolio($mysqli);

if($_POST["TYPE"] == "UP"){
	$portfolio->PortfolioUp($_POST["ID"]);
}else if($_POST["TYPE"] == "DOWN"){
	$portfolio->PortfolioDown($_POST["ID"]);
}
?>