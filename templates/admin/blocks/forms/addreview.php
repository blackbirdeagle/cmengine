<?php
$addReviewForm = new CFormBuilder();

$addReviewForm->FormStart("POST", "");
$addReviewForm->input("text", "inputAuthor", "form-control", "form-group", "REVIEW_AUTHOR", "Автор отзыва", "", true, true);
$addReviewForm->textarea("inputText", "form-control", "form-group", "REVIEW_TEXT", "Текст отзыва", "", true, true);
$addReviewForm->input("text", "inputData", "form-control", "form-group", "REVIEW_DATA", "Дата отзыва", "", true, true);
$addReviewForm->button("submit", "btn btn-primary", "REVIEW_ADD", "Добавить");
$addReviewForm->FormFinish();
?>