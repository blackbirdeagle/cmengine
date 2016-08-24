<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/faq.class.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

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
	$title = 'Административная панель - добавление вопроса';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/faq/add.php");
?>