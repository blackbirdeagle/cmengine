<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/citats.class.php");

	if($_SESSION["USER"] == ""){
		header("Location: /admin/login.php");
	}else{
		$enter = 'Здравствуйте '.$_SESSION["USER"];
	}

	$citata = new CCitats($mysqli);
	$result = $citata->GetCitats();
	$item = 1;
	$title = 'Административная панель - цитаты';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/citats/citats.php");
?>