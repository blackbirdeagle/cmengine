<form method = "POST" action = "" enctype = "multipart/form-data">
	<input class = "form-control" type = "file" name = "USER_IMAGE" placeholder = "Фотография пользователя" required/>
	<input class = "form-control" type = "text" name = "USER_NAME" placeholder = "Имя" required/>
	<input class = "form-control" type = "text" name = "USER_LOGIN" placeholder = "Логин" required/>
	<input class = "form-control" type = "password" name = "USER_PASS" placeholder = "Пароль" required/>
	<select class = "form-control" placeholder = "Уровень прав" name = "USER_POLITIC" required>
		<option value = "admin">Администратор</option>
		<option value = "user" selected>Пользователь</option>	
	</select>
	<input class = "form-control" type = "submit" name = "USER_ADD" value = "Добавить"/>
</form>