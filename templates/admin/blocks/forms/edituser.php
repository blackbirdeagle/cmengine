<?if($userGet["image"]):?>
	<img class = "img-responsive img-thumbnail" width = "300" src = "<?=$userGet["image"]?>" alt = ""/>
<?endif;?>	
<?php
$updateUserForm = new CFormBuilder();

$updateUserForm->FormStart("POST", "", true);
$updateUserForm->input("file", "inputImage", "form-control", "form-group", "USER_IMAGE", "Сменить фотографию", "", true, false);
$updateUserForm->input("text", "inputName", "form-control", "form-group", "USER_NAME", "Имя пользователя", $userGet["name"], true, true);
$updateUserForm->input("text", "inputLogin", "form-control", "form-group", "USER_LOGIN", "Новый логин", $userGet["login"], true, true);
$updateUserForm->input("password", "inputPassword", "form-control", "form-group", "USER_PASS", "Придумайте новый пароль", "", true, false);

if($userGet["politic"] === "admin"){
	$opAr = array(
				["VALUE" => "admin", "TEXT" => "Администратор", "SELECTED" => "selected"],
				["VALUE" => "user", "TEXT" => "Пользователь", "SELECTED" => ""],
			);	
}else if($userGet["politic"] === "user"){
	$opAr = array(
				["VALUE" => "admin", "TEXT" => "Администратор", "SELECTED" => ""],
				["VALUE" => "user", "TEXT" => "Пользователь", "SELECTED" => "selected"],
			);		
}

$updateUserForm->select("inputPolitic", "form-control", "form-group", "USER_POLITIC", "Уровень прав", $opAr, true, true);
	
$updateUserForm->hidden("USER_ID", $userGet["id"]);	
$updateUserForm->checkbox($userGet["block"], 'USER_BLOCK', 'checkbox', 'Блокировка');
$updateUserForm->button("submit", "btn btn-primary", "USER_UPDATE", "Изменить");
$updateUserForm->FormFinish();
?>