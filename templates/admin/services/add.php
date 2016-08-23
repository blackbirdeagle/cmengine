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
				<input class = "form-control" type = "text" name = "SERVICE_TITLE" placeholder = "Заголовок окна браузера" required/>
				<input class = "form-control" type = "text" name = "SERVICE_KEYWORDS" placeholder = "Ключевые слова страницы" />
				<input class = "form-control" type = "text" name = "SERVICE_DESC" placeholder = "Описание страницы"/>
				<input class = "form-control" type = "text" name = "SERVICE_KEY" placeholder = "Seo-ключ" required/>
				<input class = "form-control" type = "text" name = "SERVICE_H1" placeholder = "Заголовок страницы" required/>
				<textarea class = "form-control" name = "SERVICE_TEXT" placeholder = "Текст страницы"></textarea>
				<input class = "form-control" type = "submit" name = "SERVICE_ADD" value = "Добавить"/>
			</form>
		</div>
	</div>
</div>	

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/footer.php");?>