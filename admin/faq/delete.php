<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/core/faq.class.php");

$faq = new CFaq($mysqli);

if($faq->DeleteFaq($_POST["ID"])) echo 1;
else echo 0;
?>