<?php
$addServiceForm = new CFormBuilder();

$addServiceForm->FormStart("POST", "");
$addServiceForm->input("text", "inputTitle", "form-control text", "form-group", "SERVICE_TITLE", "Заголовок окна браузера", "", true, true);
$addServiceForm->input("text", "inputKeywords", "form-control", "form-group", "SERVICE_KEYWORDS", "Ключевые слова страницы", "", true, false);
$addServiceForm->input("text", "inputDesc", "form-control", "form-group", "SERVICE_DESC", "Описание страницы", "", true, false);
$addServiceForm->input("text", "inputKey", "form-control translit_text", "form-group", "SERVICE_KEY", "Seo-ключ", "", true, false);
$addServiceForm->input("text", "inputH1", "form-control", "form-group", "SERVICE_H1", "Заголовок страницы", "", true, false);
$addServiceForm->textarea("inputText", "form-control", "form-group", "SERVICE_TEXT", "Текст услуги", "", true, false);
$addServiceForm->button("submit", "btn btn-primary", "SERVICE_ADD", "Добавить");
$addServiceForm->FormFinish();
?>