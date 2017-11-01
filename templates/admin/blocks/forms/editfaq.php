<?php
$updateFaqForm = new CFormBuilder();

$updateFaqForm->FormStart("POST", "");
$updateFaqForm->input("text", "inputAuthor", "form-control", "form-group", "FAQ_AUTHOR", "Автор вопроса", $faqGet["author"], true, true);
$updateFaqForm->textarea("inputQuest", "form-control", "form-group", "FAQ_QUEST", "Текст ответа", $faqGet["quest"], true, true);
$updateFaqForm->textarea("inputAnswer", "form-control", "form-group", "FAQ_ANSWER", "Текст ответа", $faqGet["answer"], true, true);
$updateFaqForm->hidden("FAQ_ID", $faqGet["id"]);
$updateFaqForm->checkbox($faqGet["block"], 'FAQ_BLOCK', 'checkbox', 'Блокировка');
$updateFaqForm->button("submit", "btn btn-primary", "FAQ_UPDATE", "Изменить");
$updateFaqForm->FormFinish();
?>