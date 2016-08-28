<form method = "POST" action = "">
	<input class = "form-control" type = "text" name = "USER_NAME" placeholder = "Имя" required value = "<?=$userGet["name"]?>"/>
	<input class = "form-control" type = "text" name = "USER_LOGIN" placeholder = "Логин" required value = "<?=$userGet["login"]?>">
	<input class = "form-control" type = "password" name = "USER_PASS" placeholder = "Новый пароль"/>
	<input type = "hidden" name = "USER_ID" value = "<?=$userGet["id"]?>"/>
	<input class = "form-control" type = "submit" name = "USER_UPDATE" value = "Обновить"/>
</form>