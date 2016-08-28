<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/citats.class.php");

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	if(isset($_POST["CITATA_ADD"])){
		$text   = $_POST["CITATA_TEXT"];
		$author = $_POST["CITATA_AUTHOR"];

		$citata = new CCitats($mysqli);
		if($citata->AddCitata($text, $author)){
			header("Location: /admin/citats/");
		}else{
			$error = "Ошибка добавления!";
		}
	}
	$title = 'Административная панель - добавление цитаты';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/citats/add.php");
?>