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
						<th>Название работы</th>
						<th>Изображение работы</th>
						<th>Дата добавления/обновления</th>
						<th>Действия</th>
						<th>Порядок</th>
					</tr>	
					<?foreach($result as $key => $row):?>
						<tr>
							<td><?=$item?></td>
							<td><?=$row["name"]?></td>
							<td><img class = "img-responsive img-thumbnail" width = "100" src = "<?=$row["image"]?>" alt = ""/></td>	
							<td><?=$row["created_at"]?></td>
							<td><a href = "/admin/portfolio/edit.php?id=<?=$row['id']?>"><span class="glyphicon glyphicon-pencil"></span></a> / <a href = "javascript:void(0);" onclick = "deletePortfolio('<?=$row['id']?>')"><span class = "glyphicon glyphicon-remove"></span></a></td>
							<?if($item == 1):?>
								<td><a href = "javascript:void(0);" onclick = "sortDown('<?=$row['id']?>', '<?=$table?>')"><span class="glyphicon glyphicon-arrow-down"></span></a></td>
							<?elseif($item == count($result)):?>
								<td><a href = "javascript:void(0);" onclick = "sortUp('<?=$row['id']?>', '<?=$table?>')"><span class="glyphicon glyphicon-arrow-up"></span></a></td>
							<?else:?>
								<td><a href = "javascript:void(0);" onclick = "sortUp('<?=$row['id']?>', '<?=$table?>')"><span class="glyphicon glyphicon-arrow-up"></span></a> / <a href = "javascript:void(0);" onclick = "sortDown('<?=$row['id']?>', '<?=$table?>')"><span class="glyphicon glyphicon-arrow-down"></span></a></td>
							<?endif;?>					
						</tr>						
						<?$item++;?>
					<?endforeach;?>
				</table>
			</div>	
			<a href = "/admin/portfolio/add.php">Добавить работу</a>
		</div>
	</div>
</div>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/footer.php");?>