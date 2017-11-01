<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/quotes.class.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/formbuilder.class.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	if(isset($_POST["QUOTE_ADD"])){
		$text   = $_POST["QUOTE_TEXT"];
		$author = $_POST["QUOTE_AUTHOR"];

		$quote = new CQuotes($mysqli);
		if($quote->AddQuote($text, $author)){
			header("Location: /admin/quotes/");
		}else{
			$error = "Ошибка добавления!";
		}
	}
	$ar_nav[] = array("/admin/quotes/", "Цитаты");
	$ar_nav[] = array("", "Добавление цитаты");
	$title = 'Административная панель - добавление цитаты';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/quotes/add.php");
?>