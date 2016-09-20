<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "/templates/static/css/bootstrap.min.css" />
	<link rel = "stylesheet" type = "text/css" href = "/templates/static/css/style.css" />
	
	<title>Авторизация | <?=SITE_NAME?></title>
</head>	
<body>
	<div id = "auth_form">
		<?=$error?>
		<form role = "form" action = "" method = "POST">
			<div class = "form-group">
				<label for = "auth_login">Логин:</label>
				<input id = "auth_login" class = "form-control" type = "text" name = "login" placeholder = "Логин" required/>			
			</div>
			<div class = "form-group">
				<label for = "auth_pass">Пароль:</label>
				<input id = "auth_pass" class = "form-control" type = "password" name = "pass" placeholder = "Пароль" required/>				
			</div>			
			<input class = "form-control btn btn-primary" type = "submit" name = "auth" value = "Войти"/>	
		</form>
	</div>
</body>	
</html>