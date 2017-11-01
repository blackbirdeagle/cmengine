<?php
$updatePageForm = new CFormBuilder();

$updatePageForm->FormStart("POST", "");
$updatePageForm->input("text", "inputTitle", "form-control text", "form-group", "PAGE_TITLE", "Заголовок окна браузера", $pageGet["seo_title"], true, true);
$updatePageForm->input("text", "inputKeywords", "form-control", "form-group", "PAGE_KEYWORDS", "Ключевые слова", $pageGet["seo_keywords"], true, false);
$updatePageForm->input("text", "inputDesc", "form-control", "form-group", "PAGE_DESC", "Описание страницы", $pageGet["seo_desc"], true, false);
$updatePageForm->input("text", "inputKey", "form-control translit_text", "form-group", "PAGE_KEY", "Seo-ключ", $pageGet["seo_key"], true, true);
$updatePageForm->input("text", "inputH1", "form-control", "form-group", "PAGE_H1", "Заголовок страницы", $pageGet["h1"], true, true);
$updatePageForm->hidden("PAGE_ID", $pageGet["id"]);
$updatePageForm->textarea("inputText", "form-control", "form-group", "PAGE_TEXT", "Текст страницы", $pageGet["text"], true, false);
$updatePageForm->checkbox($pageGet["block"], 'PAGE_BLOCK', 'checkbox', 'Блокировка');
$updatePageForm->button("submit", "btn btn-primary", "PAGE_UPDATE", "Изменить");
$updatePageForm->FormFinish();
?>