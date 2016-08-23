<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/core/services.class.php");

$service = new CServices($mysqli);

if($service->DeleteService($_POST["ID"])) echo 1;
else echo 0;
?>