<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/faq.class.php");

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	$faq = new CFaq($mysqli);
	if(isset($_GET["id"])){
		$faqGet = $faq->GetFaqByID($_GET["id"]);
	}

	if(isset($_POST["FAQ_UPDATE"])){
		$id     = $_POST["FAQ_ID"]; 
		$quest  = $_POST["FAQ_QUEST"];
		$author = $_POST["FAQ_AUTHOR"];
		$answer = $_POST["FAQ_ANSWER"];

		if($_POST["FAQ_BLOCK"] == "on") $block = 1;
		else $block = 0;
		$faq->UpdateFaq($id, $quest, $author, $answer, $block);

		header("Location: /admin/faq/");		
	}
	$ar_nav[] = array("/admin/faq/", "Вопрос/Ответ");
	$ar_nav[] = array("", "Редактирование вопроса");
	$title = 'Редактирование вопроса';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/faq/edit.php");
?>