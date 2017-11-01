<?php
$updateReviewForm = new CFormBuilder();

$updateReviewForm->FormStart("POST", "");
$updateReviewForm->input("text", "inputAuthor", "form-control", "form-group", "REVIEW_AUTHOR", "Автор отзыва", $reviewGet["author"], true, true);
$updateReviewForm->textarea("inputText", "form-control", "form-group", "REVIEW_TEXT", "Текст отзыва", $reviewGet["text"], true, true);
$updateReviewForm->input("text", "inputData", "form-control", "form-group", "REVIEW_DATA", "Дата отзыва", $reviewGet["data"], true, true);
$updateReviewForm->hidden("REVIEW_ID", $reviewGet["id"]);
$updateReviewForm->checkbox($reviewGet["block"], 'REVIEW_BLOCK', 'checkbox', 'Блокировка');
$updateReviewForm->button("submit", "btn btn-primary", "REVIEW_UPDATE", "Изменить");
$updateReviewForm->FormFinish();
?>