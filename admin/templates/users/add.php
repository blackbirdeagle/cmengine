<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "/admin/static/css/bootstrap.min.css" />
	<title>Административная панель</title>
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
					<input class = "form-control" type = "text" name = "USER_NAME" placeholder = "Имя" required/>
					<input class = "form-control" type = "text" name = "USER_LOGIN" placeholder = "Логин" required/>
					<input class = "form-control" type = "password" name = "USER_PASS" placeholder = "Пароль" required/>
					<input class = "form-control" type = "submit" name = "USER_ADD" value = "Добавить"/>
				</form>
			</div>
		</div>

	</div>	
</body>
</html>	