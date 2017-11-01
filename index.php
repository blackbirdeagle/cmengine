<?php
require_once("/core/formbuilder.class.php");

$form = new CFormBuilder();

$form->FormStart("POST", "");
$form->Field("textarea", "", "form-control", "REVIEW_TEXT", "Текст отзыва", "", true); echo '<br/>';
$form->Field("input", "text", "form-control", "REVIEW_AUTHOR", "Автор отзыва", "", true); echo '<br/>';
$form->Field("input", "submit", "form-control", "REVIEW_ADD", "", "Добавить");
$form->FormFinish();
?>
