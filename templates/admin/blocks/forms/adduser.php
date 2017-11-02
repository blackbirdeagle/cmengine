<?php
$addUserForm = new CFormBuilder();

$addUserForm->FormStart("POST", "", true);
$addUserForm->input("file", "inputImage", "form-control", "form-group", "USER_IMAGE", "Фотография пользователя", "", true, true);
$addUserForm->input("text", "inputName", "form-control", "form-group", "USER_NAME", "Имя пользователя", "", true, true);
$addUserForm->input("text", "inputLogin", "form-control", "form-group", "USER_LOGIN", "Логин", "", true, true);
$addUserForm->input("password", "inputPassword", "form-control", "form-group", "USER_PASS", "Пароль", "", true, true);
$addUserForm->select("inputPolitic", "form-control", "form-group", "USER_POLITIC", "Уровень прав", array(
		["VALUE" => "admin", "TEXT" => "Администратор"],
		["VALUE" => "user", "TEXT" => "Пользователь"],
	), true, true);
$addUserForm->button("submit", "btn btn-primary", "USER_ADD", "Добавить");
$addUserForm->FormFinish();
?>