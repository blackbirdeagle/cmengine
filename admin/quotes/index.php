<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/quotes.class.php");

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	$quote = new CQuotes($mysqli);
	$result = $quote->GetQuotes(0);
	$item = 1;
	$title = 'Административная панель - цитаты';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/quotes/quotes.php");
?>