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
					<th>Название услуги</th>
					<th>SEO-ключ</th>
					<th>Дата добавления/обновления</th>
					<th>Действия</th>
				</tr>	
				<?foreach($result as $key => $row):?>
					<tr>
						<td><?=$item?></td>
						<td><?=$row["h1"]?></td>
						<td><?=$row["seo_key"]?></td>	
						<td><?=$row["created_at"]?></td>
						<td><a href = "/admin/services/edit.php?id=<?=$row['id']?>">Редактировать</a> / <a href = "javascript:void(0);" onclick = "deleteService('<?=$row['id']?>')">Удалить</a></td>
					</tr>						
					<?$item++;?>
				<?endforeach;?>
			</table>
			<a href = "/admin/services/add.php">Добавить услугу</a>
		</div>
	</div>
</div>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/footer.php");?>