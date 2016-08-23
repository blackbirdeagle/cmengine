<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/core/user.class.php");

$user = new User($mysqli);

if($user->DeleteUser($_POST["ID"])) echo 1;
else echo 0;
?>