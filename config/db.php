<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("BASE", "engine_base");
define("PREFIX", "ywm_");

@$mysqli = new mysqli(HOST, USER, PASS, BASE);
$mysqli->query("SET NAMES 'utf8'");

session_start();

require_once($_SERVER["DOCUMENT_ROOT"]."/core/functions.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/core/mysql.class.php");
?>