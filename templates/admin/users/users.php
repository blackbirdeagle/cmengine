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
			<div class = "breadcrumbs">
				<?=ShowNav($ar_nav)?>
			</div>	
			<div class = "table-responsive">
				<table class = "table">
					<tr>
						<th>№</th>
						<th>Логин</th>
						<th>Имя</th>
						<th>Дата добавления/обновления</th>
						<th>Действия</th>
					</tr>	
					<?foreach($result as $key => $row):?>
						<tr>
							<td><?=$item?></td>
							<td><?=$row["login"]?></td>
							<td><?=$row["name"]?></td>	
							<td><?=$row["created_at"]?></td>
							<td><a href = "/admin/users/edit.php?id=<?=$row['id']?>"><span class="glyphicon glyphicon-pencil"></span>
</a> / <a href = "javascript:void(0);" onclick = "deleteUser('<?=$row['id']?>')"><span class = "glyphicon glyphicon-remove"></span></a></td>
						</tr>						
						<?$item++;?>
					<?endforeach;?>
				</table>
			</div>	
			<a href = "/admin/users/add.php">Добавить пользователя</a>
		</div>
	</div>
</div>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/footer.php");?>