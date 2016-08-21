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

			</div>
		</div>

	</div>	
	<div >	
		<form action = "" method = "POST">
			<input type = "submit" name = "logout" value = "Выйти"/>
		</form>

	</div>	
</body>
</html>	