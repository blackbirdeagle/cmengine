<?php
$updateQuoteForm = new CFormBuilder();

$updateQuoteForm->FormStart("POST", "");
$updateQuoteForm->input("text", "inputAuthor", "form-control", "form-group", "QUOTE_AUTHOR", "Автор цитаты", $quoteGet["author"], true, true);
$updateQuoteForm->hidden("QUOTE_ID", $quoteGet["id"]);
$updateQuoteForm->textarea("inputQuote", "form-control", "form-group", "QUOTE_TEXT", "Текст цитаты", $quoteGet["text"], true, true);
$updateQuoteForm->checkbox($quoteGet["block"], 'QUOTE_BLOCK', 'checkbox', 'Блокировка');
$updateQuoteForm->button("submit", "btn btn-primary", "QUOTE_UPDATE", "Изменить");
$updateQuoteForm->FormFinish();
?>