<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/core/faq.class.php");

$faq = new CFaq($mysqli);

if($_POST["TYPE"] == "UP"){
	$faq->FaqUp($_POST["ID"]);
}else if($_POST["TYPE"] == "DOWN"){
	$faq->FaqDown($_POST["ID"]);
}
?>