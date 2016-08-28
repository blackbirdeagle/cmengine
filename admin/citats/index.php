<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/citats.class.php");

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	$citata = new CCitats($mysqli);
	$result = $citata->GetCitats(0);
	$item = 1;
	$title = 'Административная панель - цитаты';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/citats/citats.php");
?>