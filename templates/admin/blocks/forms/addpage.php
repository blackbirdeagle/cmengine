<?php
$addPageForm = new CFormBuilder();

$addPageForm->FormStart("POST", "");
$addPageForm->input("text", "inputTitle", "form-control text", "form-group", "PAGE_TITLE", "Заголовок окна браузера", "", true, true);
$addPageForm->input("text", "inputKeywords", "form-control", "form-group", "PAGE_KEYWORDS", "Ключевые слова", "", true, false);
$addPageForm->input("text", "inputDesc", "form-control", "form-group", "PAGE_DESC", "Описание страницы", "", true, false);
$addPageForm->input("text", "inputKey", "form-control translit_text", "form-group", "PAGE_KEY", "Seo-ключ", "", true, true);
$addPageForm->input("text", "inputH1", "form-control", "form-group", "PAGE_H1", "Заголовок страницы", "", true, true);
$addPageForm->textarea("inputText", "form-control", "form-group", "PAGE_TEXT", "Текст страницы", "", true, false);
$addPageForm->button("submit", "btn btn-primary", "PAGE_ADD", "Добавить");
$addPageForm->FormFinish();
?>