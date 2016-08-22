<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("BASE", "engine_base");
define("PREFIX", "ywm_");

@$mysqli = new mysqli(HOST, USER, PASS, BASE);
$mysqli->query("SET NAMES 'utf8'");

session_start();
?>