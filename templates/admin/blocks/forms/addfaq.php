<?php
$addFaqForm = new CFormBuilder();

$addFaqForm->FormStart("POST", "");
$addFaqForm->input("text", "inputAuthor", "form-control", "form-group", "FAQ_AUTHOR", "Автор вопроса", "", true, true);
$addFaqForm->textarea("inputQuest", "form-control", "form-group", "FAQ_QUEST", "Текст ответа", "", true, true);
$addFaqForm->textarea("inputAnswer", "form-control", "form-group", "FAQ_ANSWER", "Текст ответа", "", true, true);
$addFaqForm->button("submit", "btn btn-primary", "FAQ_ADD", "Добавить");
$addFaqForm->FormFinish();
?>