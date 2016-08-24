<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/faq.class.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

	$faq = new CFaq($mysqli);
	$result = $faq->GetFaq();
	$item = 1;
	$title = 'Административная панель - вопрос/ответ';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/faq/faq.php");
?>