<form role = "form" method = "POST" action = "">
	<?if($userGet["image"]):?>
		<img class = "img-responsive img-thumbnail" width = "300" src = "<?=$userGet["image"]?>" alt = ""/>
	<?endif;?>	
	<div class = "form-group">
		<label for = "inputName">Имя пользователя</label>
		<input id = "inputName" class = "form-control" type = "text" name = "USER_NAME" placeholder = "Введите имя пользователя" required value = "<?=$userGet["name"]?>"/>
	</div>
	<div class = "form-group">
		<label for = "inputLogin">Логин</label>
		<input id = "inputLogin" class = "form-control" type = "text" name = "USER_LOGIN" placeholder = "Введите логин" required value = "<?=$userGet["login"]?>">
	</div>
	<div class = "form-group">
		<label for = "inputPassword">Новый пароль</label>
		<input id = "inputPassword" class = "form-control" type = "password" name = "USER_PASS" placeholder = "Введите новый пароль"/>
	</div>
	<input type = "hidden" name = "USER_ID" value = "<?=$userGet["id"]?>"/>
	<button class = "btn btn-primary" type = "submit" name = "USER_UPDATE">Изменить</button>
</form>