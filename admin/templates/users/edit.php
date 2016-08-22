<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "/admin/static/css/bootstrap.min.css" />
	<title>Редактирование пользователя - <?=$userGet["name"]?></title>
</head>	
<body>
	<div class = "container">
		<div class = "row">
			<div class = "col-md-12">
				<?=$enter?>
			</div>
		</div>
		<div class = "row">
			<div class = "col-md-4 left-sidebar">
				<ul>
					<li><a href = "/admin/users/">Пользователи</a></li>
				</ul>
			</div>
			<div class = "col-md-8">
				<form method = "POST" action = "">
					<input class = "form-control" type = "text" name = "USER_NAME" placeholder = "Имя" required value = "<?=$userGet["name"]?>"/>
					<input class = "form-control" type = "text" name = "USER_LOGIN" placeholder = "Логин" required value = "<?=$userGet["login"]?>">
					<input class = "form-control" type = "password" name = "USER_PASS" placeholder = "Пароль" required value = "<?=$userGet["pass"]?>"/>
					<input type = "hidden" name = "USER_ID" value = "<?=$userGet["id"]?>"/>
					<input class = "form-control" type = "submit" name = "USER_UPDATE" value = "Обновить"/>
				</form>
			</div>
		</div>
	</div>	
</body>
</html>