<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/core/staticpages.class.php");

$page = new CStaticPages($mysqli);

if($_POST["TYPE"] == "UP"){
	$page->PageUp($_POST["ID"]);
}else if($_POST["TYPE"] == "DOWN"){
	$page->PageDown($_POST["ID"]);
}
?>