<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "/admin/static/css/bootstrap.min.css" />
	<title>Список пользователей</title>
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
				<table>
					<tr>
						<th>№</th>
						<th>Логин</th>
						<th>Имя</th>
						<th>Дата добавления</th>
						<th>Действия</th>
					</tr>	

					<?while($row = $result_set->fetch_assoc()):?>
						<tr>
							<td><?=$item?></td>
							<td><?=$row["login"]?></td>
							<td><?=$row["name"]?></td>	
							<td><?=$row["created_at"]?></td>
							<td><a href = "/admin/users/edit.php?id=<?=$row['id']?>">Редактировать</a></td>
						</tr>
						<?$item++;?>
					<?endwhile;?>
				</table>
				<a href = "/admin/users/add.php">Добавить пользователя</a>
			</div>
		</div>
	</div>
</body>
</html>