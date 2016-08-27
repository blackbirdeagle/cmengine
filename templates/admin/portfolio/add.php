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
		<div class = "col-md-9"><?=$error?>
			<form method = "POST" action = "" enctype = "multipart/form-data">
				<input class = "form-control" type = "text" name = "PORTFOLIO_NAME" placeholder = "Название работы" required>
				<input class = "form-control" type = "file" name = "PORTFOLIO_IMAGE" placeholder = "Изображение" required/>

				<input class = "form-control" type = "submit" name = "PORTFOLIO_ADD" value = "Добавить"/>
			</form>
		</div>
	</div>
</div>	

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/footer.php");?>