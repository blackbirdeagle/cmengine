<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/quotes.class.php");

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	$quote = new CQuotes($mysqli);
	if(isset($_GET["id"])){
		$quoteGet = $quote->GetQuoteByID($_GET["id"]);
	}

	if(isset($_POST["QUOTE_UPDATE"])){
		$id     = $_POST["QUOTE_ID"]; 
		$text   = $_POST["QUOTE_TEXT"];
		$author = $_POST["QUOTE_AUTHOR"];

		if($_POST["QUOTE_BLOCK"] == "on") $block = 1;
		else $block = 0;
		$quote->UpdateQuote($id, $text, $author, $block);

		header("Location: /admin/quotes/");		
	}
	$ar_nav[] = array("/admin/reviews/", "Цитаты");
	$ar_nav[] = array("", "Редактирование цитаты");
	$title = 'Редактирование цитаты';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/quotes/edit.php");
?>