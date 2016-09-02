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
							<td><a href = "/admin/quotes/edit.php?id=<?=$row['id']?>"><span class="glyphicon glyphicon-pencil"></span></a> / <a href = "javascript:void(0);" onclick = "deleteQuote('<?=$row['id']?>')"><span class = "glyphicon glyphicon-remove"></span></a></td>
						</tr>						
						<?$item++;?>
					<?endforeach;?>
				</table>
			</div>	
			<a href = "/admin/quotes/add.php">Добавить цитату</a>
		</div>
	</div>
</div>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/footer.php");?>