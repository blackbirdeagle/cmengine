<form method = "POST" action = "">
	<input class = "form-control" type = "text" name = "SERVICE_TITLE" placeholder = "Заголовок окна браузера" required value = "<?=$serviceGet["seo_title"]?>"/>
	<input class = "form-control" type = "text" name = "SERVICE_KEYWORDS" placeholder = "Ключевые слова страницы" value = "<?=$serviceGet["seo_keywords"]?>"/>
	<input class = "form-control" type = "text" name = "SERVICE_DESC" placeholder = "Описание страницы" value = "<?=$serviceGet["seo_desc"]?>"/>
	<input class = "form-control" type = "text" name = "SERVICE_KEY" placeholder = "Seo-ключ" required value = "<?=$serviceGet["seo_key"]?>"/>
	<input class = "form-control" type = "text" name = "SERVICE_H1" placeholder = "Заголовок страницы" required value = "<?=$serviceGet["h1"]?>"/>
	<input type = "hidden" name = "SERVICE_ID" value = "<?=$serviceGet["id"]?>"/>
	<textarea class = "form-control" name = "SERVICE_TEXT" placeholder = "Текст страницы"><?=$serviceGet["text"]?></textarea>
	<?if($serviceGet["block"] == "0"):?>
		<input class = "form-control" type = "checkbox" name = "SERVICE_BLOCK"/>Блокировка
	<?elseif($serviceGet["block"] == "1"):?>
		<input class = "form-control" type = "checkbox" name = "SERVICE_BLOCK" checked/>Блокировка
	<?endif;?>	
	<input class = "form-control" type = "submit" name = "SERVICE_UPDATE" value = "Изменить"/>
</form>