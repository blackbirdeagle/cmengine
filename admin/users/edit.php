<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/user.class.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/formbuilder.class.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	$user = new CUser($mysqli);
	if(isset($_GET["id"])){
		$userGet = $user->GetUserByID($_GET["id"]);
	}

	if(isset($_POST["USER_UPDATE"])){
		$id = $_POST["USER_ID"];
		$login = $_POST["USER_LOGIN"];
		$pass = $_POST["USER_PASS"];
		$name = $_POST["USER_NAME"];
		$politic = $_POST["USER_POLITIC"];
		$image = $_POST["USER_IMAGE"];
		
		if(isset($_FILES["USER_IMAGE"])){
			if(file_upload($_FILES["USER_IMAGE"], $_SERVER["DOCUMENT_ROOT"]."/upload/users/")){
				$arr = explode(".", basename($_FILES["USER_IMAGE"]["name"]));
				$name_img = md5($arr[0]).".".$arr[1];
				$image = "/upload/users/".$name_img;			
			}		
		}

		if($_POST["USER_BLOCK"] == "on") $block = 1;
		else $block = 0;		
		$user->UpdateUser($id, $login, $pass, $name, $politic, $image, $block);

		header("Location: /admin/users/");		
	}
	$ar_nav[] = array("/admin/users/", "Пользователи");
	$ar_nav[] = array("", $userGet["name"]);
	$title = 'Редактирование пользователя - '.$userGet["name"];
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/users/edit.php");
?>