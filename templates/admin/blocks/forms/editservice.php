<?php
$updateServiceForm = new CFormBuilder();

$updateServiceForm->FormStart("POST", "");
$updateServiceForm->input("text", "inputTitle", "form-control text", "form-group", "SERVICE_TITLE", "Заголовок окна браузера", $serviceGet["seo_title"], true, true);
$updateServiceForm->input("text", "inputKeywords", "form-control", "form-group", "SERVICE_KEYWORDS", "Ключевые слова страницы", $serviceGet["seo_keywords"], true, false);
$updateServiceForm->input("text", "inputDesc", "form-control", "form-group", "SERVICE_DESC", "Описание страницы", $serviceGet["seo_desc"], true, false);
$updateServiceForm->input("text", "inputKey", "form-control translit_text", "form-group", "SERVICE_KEY", "Seo-ключ", $serviceGet["seo_key"], true, false);
$updateServiceForm->input("text", "inputH1", "form-control", "form-group", "SERVICE_H1", "Заголовок страницы", $serviceGet["h1"], true, false);
$updateServiceForm->hidden("SERVICE_ID", $serviceGet["id"]);
$updateServiceForm->textarea("inputText", "form-control", "form-group", "SERVICE_TEXT", "Текст услуги", $serviceGet["text"], true, false);
$updateServiceForm->checkbox($serviceGet["block"], 'SERVICE_BLOCK', 'checkbox', 'Блокировка');
$updateServiceForm->button("submit", "btn btn-primary", "SERVICE_UPDATE", "Изменить");
$updateServiceForm->FormFinish();
?>