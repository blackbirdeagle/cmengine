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
				<a href = "/admin/">Главная</a> / <span>Отзывы</span>
			</div>
			<table>
				<tr>
					<th>№</th>
					<th>Отзыв</th>
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
						<td><a href = "/admin/reviews/edit.php?id=<?=$row['id']?>">Редактировать</a> / <a href = "javascript:void(0);" onclick = "deleteReview('<?=$row['id']?>')">Удалить</a></td>
					</tr>						
					<?$item++;?>
				<?endforeach;?>
			</table>
			<a href = "/admin/reviews/add.php">Добавить отзыв</a>
		</div>
	</div>
</div>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/footer.php");?>