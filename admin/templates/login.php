<!DOCTYPE html>
<html>
<head>
	<title>Авторизация</title>
</head>	
<body>
	<div>
		<?=$error?>
		<form action = "" method = "POST">
			<table>
				<tr>
					<td>Логин:</td>
					<td><input type = "text" name = "login" placeholder = "Логин" required/></td>
				</tr>
				<tr>
					<td>Пароль:</td>
					<td><input type = "password" name = "pass" placeholder = "Пароль" required/></td>
				</tr>						
			</table>
			<input type = "submit" name = "auth" value = "Войти"/>	
		</form>
	</div>
</body>	
</html>