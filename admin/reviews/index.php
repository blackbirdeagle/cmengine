<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/reviews.class.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

	$review = new CReviews($mysqli);
	$result = $review->GetReviews(0);
	$item = 1;
	$title = 'Административная панель - отзывы';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/reviews/reviews.php");
?>