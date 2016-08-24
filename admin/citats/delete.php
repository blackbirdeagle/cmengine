<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/core/citats.class.php");

$citata = new CCitats($mysqli);

if($citata->DeleteCitata($_POST["ID"])) echo 1;
else echo 0;
?>