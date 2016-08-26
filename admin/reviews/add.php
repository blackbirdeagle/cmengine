<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/reviews.class.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

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
	$title = 'Административная панель - добавление отзыва';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/reviews/add.php");
?>