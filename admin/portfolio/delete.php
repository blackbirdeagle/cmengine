<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/core/portfolio.class.php");

$portfolio = new CPortfolio($mysqli);

if($portfolio->DeletePortfolio($_POST["ID"])) echo 1;
else echo 0;
?>