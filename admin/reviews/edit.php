<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/reviews.class.php");

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	$review = new CReviews($mysqli);
	if(isset($_GET["id"])){
		$reviewGet = $review->GetReviewByID($_GET["id"]);
	}

	if(isset($_POST["REVIEW_UPDATE"])){
		$id     = $_POST["REVIEW_ID"]; 
		$text   = $_POST["REVIEW_TEXT"];
		$author = $_POST["REVIEW_AUTHOR"];
		$data   = $_POST["REVIEW_DATA"];

		if($_POST["REVIEW_BLOCK"] == "on") $block = 1;
		else $block = 0;
		$review->UpdateReview($id, $text, $author, $data, $block);

		header("Location: /admin/reviews/");		
	}
	$title = 'Редактирование отзыва';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/reviews/edit.php");
?>