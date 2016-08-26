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
				<textarea class = "form-control" name = "REVIEW_TEXT" placeholder = "Текст отзыва" required></textarea>
				<input class = "form-control" type = "text" name = "REVIEW_AUTHOR" placeholder = "Автор отзыва" required/>
				<input class = "form-control" type = "text" name = "REVIEW_DATA" placeholder = "Дата отзыва" required/>
				<input class = "form-control" type = "submit" name = "REVIEW_ADD" value = "Добавить"/>
			</form>
		</div>
	</div>
</div>	

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/footer.php");?>