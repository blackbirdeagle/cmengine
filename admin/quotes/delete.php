<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/core/quotes.class.php");

$quote = new CQuotes($mysqli);

if($quote->DeleteQuote($_POST["ID"])) echo 1;
else echo 0;
?>