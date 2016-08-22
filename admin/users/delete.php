<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/admin/users/user.class.php");

$id = $_POST["ID"];

$user = new User($mysqli);

if($user->DeleteUser($id)) echo 1;
else echo 0;
?>