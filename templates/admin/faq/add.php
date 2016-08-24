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
			<form method = "POST" action = "">
				<textarea class = "form-control" name = "FAQ_QUEST" placeholder = "Текст вопроса" required></textarea>
				<input class = "form-control" name = "FAQ_AUTHOR" placeholder = "Автор вопроса" required/>
				<textarea class = "form-control" name = "FAQ_ANSWER" placeholder = "Текст ответа" required></textarea>
				<input class = "form-control" type = "submit" name = "FAQ_ADD" value = "Добавить"/>
			</form>
		</div>
	</div>
</div>	

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/footer.php");?>