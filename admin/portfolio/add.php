<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/config/db.php");
	require_once($_SERVER["DOCUMENT_ROOT"]."/core/portfolio.class.php");

	require_once($_SERVER["DOCUMENT_ROOT"]."/admin/authcontrol.php");

	if(isset($_POST["PORTFOLIO_ADD"])){
		$name    = $_POST["PORTFOLIO_NAME"];
		$image = "";

		if(isset($_FILES["PORTFOLIO_IMAGE"])){
			if(file_upload($_FILES["PORTFOLIO_IMAGE"], $_SERVER["DOCUMENT_ROOT"]."/upload/")){
				$arr = explode(".", basename($_FILES["PORTFOLIO_IMAGE"]["name"]));
				$name_img = md5($arr[0]).".".$arr[1];
				$image = "/upload/".$name_img;			
			}		
		}

		if($image != ""){
			$portfolio = new CPortfolio($mysqli);
			if($portfolio->AddPortfolio($image, $name)){
				header("Location: /admin/portfolio/");
			}else{
				$error = "Ошибка добавления!";
			}
		}else $error = "Ошибка копирования файлов на сервер?";	
	}

	$title = 'Административная панель - добавление работы в портфолио';
	require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/portfolio/add.php");
?>