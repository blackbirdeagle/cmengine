<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/core/services.class.php");

$service = new CServices($mysqli);

if($_POST["TYPE"] == "UP"){
	$service->ServiceUp($_POST["ID"]);
}else if($_POST["TYPE"] == "DOWN"){
	$service->ServiceDown($_POST["ID"]);
}
?>