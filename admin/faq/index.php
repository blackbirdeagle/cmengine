<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/faq.class.php");

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	$faq = new CFaq($mysqli);
	$result = $faq->GetFaq(2);
	$item = 1;
	$table = "faq";
	$title = 'Административная панель - вопрос/ответ';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/faq/faq.php");
?>