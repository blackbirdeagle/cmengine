<form role = "form" method = "POST" action = "" enctype = "multipart/form-data">
	<div class = "form-group">
		<label for = "inputImage">Фотография пользователя</label>
		<input id = "inputImage" class = "form-control" type = "file" name = "USER_IMAGE" placeholder = "Загрузите фотографию пользователя" required/>
	</div>
	<div class = "form-group">
		<label for = "inputName">Имя пользователя</label>
		<input id = "inputName" class = "form-control" type = "text" name = "USER_NAME" placeholder = "Введите имя пользователя" required/>
	</div>
	<div class = "form-group">
		<label for = "inputLogin">Логин</label>
		<input id = "inputLogin" class = "form-control" type = "text" name = "USER_LOGIN" placeholder = "Введите логин" required/>
	</div>
	<div class = "form-group">
		<label for = "inputPassword">Пароль</label>
		<input id = "inputPassword" class = "form-control" type = "password" name = "USER_PASS" placeholder = "Введите пароль" required/>
	</div>
	<div class = "form-group">
		<label for = "inputPolitic">Уровень прав</label>
		<select id = "inputPolitic" class = "form-control" name = "USER_POLITIC" required>
			<option value = "admin">Администратор</option>
			<option value = "user" selected>Пользователь</option>	
		</select>
	</div>	
	<button class = "btn btn-primary" type = "submit" name = "USER_ADD">Добавить</button>
</form>