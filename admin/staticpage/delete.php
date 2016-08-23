<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/core/staticpages.class.php");

$page = new CStaticPages($mysqli);

if($page->DeletePage($_POST["ID"])) echo 1;
else echo 0;
?>