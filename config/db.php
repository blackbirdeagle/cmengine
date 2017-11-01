<?php
/*
Copyright: Alexander Afanasyev
Name: connection setting
Date: 2016-2017
*/
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("BASE", "engine_base");
define("PREFIX", "ywm_");
define("SITE_NAME", "Автосеривис Бежица-Универсал");

@$mysqli = new mysqli(HOST, USER, PASS, BASE);
$mysqli->query("SET NAMES 'utf8'");

session_start();

$ar_nav[] = array("/admin/", "Главная");

$url = $_SERVER["REQUEST_URI"]; //текущий url

require_once($_SERVER["DOCUMENT_ROOT"]."/core/functions.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/core/mysql.class.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/admin/left_menu.php");
?>