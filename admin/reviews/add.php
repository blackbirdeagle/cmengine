<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/reviews.class.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/formbuilder.class.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	if(isset($_POST["REVIEW_ADD"])){
		$text   = $_POST["REVIEW_TEXT"];
		$author = $_POST["REVIEW_AUTHOR"];
		$data   = $_POST["REVIEW_DATA"];

		$review = new CReviews($mysqli);
		if($review->AddReview($text, $author, $data)){
			header("Location: /admin/reviews/");
		}else{
			$error = "Ошибка добавления!";
		}
	}
	$ar_nav[] = array("/admin/reviews/", "Отзывы");
	$ar_nav[] = array("", "Добавление отзыва");
	$title = 'Административная панель - добавление отзыва';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/reviews/add.php");
?>