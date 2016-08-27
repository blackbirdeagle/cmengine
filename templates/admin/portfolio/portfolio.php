<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/header.php");?>

<div class = "container">
	<div class = "row">
		<div class = "col-md-12">
			<?=$enter?>
		</div>
	</div>
	<div class = "row">
		<div class = "col-md-3 left-sidebar">
			<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/left_menu.php");?>
		</div>
		<div class = "col-md-9">
			<table>
				<tr>
					<th>№</th>
					<th>Название работы</th>
					<th>Изображение работы</th>
					<th>Дата добавления/обновления</th>
					<th>Действия</th>
				</tr>	
				<?foreach($result as $key => $row):?>
					<tr>
						<td><?=$item?></td>
						<td><?=$row["name"]?></td>
						<td><img width = "100" src = "<?=$row["image"]?>" alt = ""/></td>	
						<td><?=$row["created_at"]?></td>
						<td><a href = "/admin/portfolio/edit.php?id=<?=$row['id']?>">Редактировать</a> / <a href = "javascript:void(0);" onclick = "deletePortfolio('<?=$row['id']?>')">Удалить</a></td>
					</tr>						
					<?$item++;?>
				<?endforeach;?>
			</table>
			<a href = "/admin/portfolio/add.php">Добавить работу</a>
		</div>
	</div>
</div>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/footer.php");?>