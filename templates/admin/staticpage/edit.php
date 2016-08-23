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
			<form method = "POST" action = "">
				<input class = "form-control" type = "text" name = "PAGE_TITLE" placeholder = "Заголовок окна браузера" required value = "<?=$pageGet["seo_title"]?>"/>
				<input class = "form-control" type = "text" name = "PAGE_KEYWORDS" placeholder = "Ключевые слова страницы" value = "<?=$pageGet["seo_keywords"]?>"/>
				<input class = "form-control" type = "text" name = "PAGE_DESC" placeholder = "Описание страницы" value = "<?=$pageGet["seo_desc"]?>"/>
				<input class = "form-control" type = "text" name = "PAGE_KEY" placeholder = "Seo-ключ" required value = "<?=$pageGet["seo_key"]?>"/>
				<input class = "form-control" type = "text" name = "PAGE_H1" placeholder = "Заголовок страницы" required value = "<?=$pageGet["h1"]?>"/>
				<input type = "hidden" name = "PAGE_ID" value = "<?=$pageGet["id"]?>"/>
				<textarea class = "form-control" name = "PAGE_TEXT" placeholder = "Текст страницы"><?=$pageGet["text"]?></textarea>
				<?if($pageGet["block"] == "0"):?>
					<input class = "form-control" type = "checkbox" name = "PAGE_BLOCK"/>Блокировка
				<?elseif($pageGet["block"] == "1"):?>
					<input class = "form-control" type = "checkbox" name = "PAGE_BLOCK" checked/>Блокировка
				<?endif;?>	
				<input class = "form-control" type = "submit" name = "PAGE_UPDATE" value = "Изменить"/>
			</form>
		</div>
	</div>
</div>	

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/footer.php");?>