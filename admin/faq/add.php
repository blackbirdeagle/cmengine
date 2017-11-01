<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/faq.class.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/formbuilder.class.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	if(isset($_POST["FAQ_ADD"])){
		$quest  = $_POST["FAQ_QUEST"];
		$author = $_POST["FAQ_AUTHOR"];
		$answer = $_POST["FAQ_ANSWER"];

		$faq = new CFaq($mysqli);
		if($faq->AddFaq($quest, $author, $answer)){
			header("Location: /admin/faq/");
		}else{
			$error = "Ошибка добавления!";
		}
	}
	$ar_nav[] = array("/admin/faq/", "Вопрос/Ответ");
	$ar_nav[] = array("", "Добавление вопроса");
	$title = 'Административная панель - добавление вопроса';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/faq/add.php");
?>