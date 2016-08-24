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
					<th>Цитата</th>
					<th>Автор</th>
					<th>Дата добавления/обновления</th>
					<th>Действия</th>
				</tr>	
				<?foreach($result as $key => $row):?>
					<tr>
						<td><?=$item?></td>
						<td><?=$row["text"]?></td>
						<td><?=$row["author"]?></td>	
						<td><?=$row["created_at"]?></td>
						<td><a href = "/admin/citats/edit.php?id=<?=$row['id']?>">Редактировать</a> / <a href = "javascript:void(0);" onclick = "deleteCitata('<?=$row['id']?>')">Удалить</a></td>
					</tr>						
					<?$item++;?>
				<?endforeach;?>
			</table>
			<a href = "/admin/citats/add.php">Добавить цытату</a>
		</div>
	</div>
</div>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/footer.php");?>