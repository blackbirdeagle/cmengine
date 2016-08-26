<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/core/reviews.class.php");

$review = new CReviews($mysqli);

if($review->DeleteReview($_POST["ID"])) echo 1;
else echo 0;
?>