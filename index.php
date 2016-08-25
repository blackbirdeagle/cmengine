<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/core/functions.php");

$fields[0] = array("text", 'eeeeeee');
$fields[1] = array("author", 'rrrrrrr');
$fields[2] = array("block", 0);

echo count($fields)."<br/>";

ar_dump($fields);
?>