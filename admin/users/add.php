<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/user.class.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/formbuilder.class.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	if(isset($_POST["USER_ADD"])){
		$login = $_POST["USER_LOGIN"];
		$pass = $_POST["USER_PASS"];
		$name = $_POST["USER_NAME"];
		$image = "";
		$politic = $_POST["USER_POLITIC"];

		if(isset($_FILES["USER_IMAGE"])){
			if(file_upload($_FILES["USER_IMAGE"], $_SERVER["DOCUMENT_ROOT"]."/upload/users/")){
				$arr = explode(".", basename($_FILES["USER_IMAGE"]["name"]));
				$name_img = md5($arr[0]).".".$arr[1];
				$image = "/upload/users/".$name_img;			
			}		
		}

		if($image != ""){
			$user = new CUser($mysqli);
			if($user->AddUser($login, $pass, $name, $image, $politic)){
				header("Location: /admin/users/");
			}else{
				$error = "Ошибка добавления!";
			}
		}else $error = "Ошибка копирования файлов на сервер?";
	}
	$ar_nav[] = array("/admin/users/", "Пользователи");
	$ar_nav[] = array("", 'Добавление пользователя');
	$title = 'Административная панель - добавление пользователя';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/users/add.php");
?>