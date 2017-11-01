<?php
$addQuoteForm = new CFormBuilder();

$addQuoteForm->FormStart("POST", "");
$addQuoteForm->input("text", "inputAuthor", "form-control", "form-group", "QUOTE_AUTHOR", "Автор цитаты", "", true, true);
$addQuoteForm->textarea("inputQuote", "form-control", "form-group", "QUOTE_TEXT", "Текст цитаты", "", true, true);
$addQuoteForm->button("submit", "btn btn-primary", "QUOTE_ADD", "Добавить");
$addQuoteForm->FormFinish();
?>