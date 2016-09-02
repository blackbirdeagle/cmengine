<form role = "form" method = "POST" action = "">
	<div class = "form-group">
		<label for = "inputTitle">Заголовок окна браузера</label>
		<input id = "inputTitle" class = "form-control text" type = "text" name = "SERVICE_TITLE" placeholder = "Введите заголовок окна браузера" required value = "<?=$serviceGet["seo_title"]?>"/>
	</div>
	<div class = "form-group">
		<label for = "inputKeywords">Ключевые слова страницы</label>
		<input id = "inputKeywords" class = "form-control" type = "text" name = "SERVICE_KEYWORDS" placeholder = "Введите ключевые слова страницы" value = "<?=$serviceGet["seo_keywords"]?>"/>
	</div>
	<div class = "form-group">
		<label for = "inputDesc">Описание страницы</label>
		<input id = "inputDesc" class = "form-control" type = "text" name = "SERVICE_DESC" placeholder = "Введите описание страницы" value = "<?=$serviceGet["seo_desc"]?>"/>
	</div>
	<div class = "form-group">
		<label for = "inputKey">Seo-ключ</label>
		<input id = "inputKey" class = "form-control translit_text" type = "text" name = "SERVICE_KEY" placeholder = "Введите seo-ключ" required value = "<?=$serviceGet["seo_key"]?>"/>
	</div>
	<div class = "form-group">
		<label for = "inputH1">Заголовок страницы</label>
		<input id = "inputH1" class = "form-control" type = "text" name = "SERVICE_H1" placeholder = "Введите заголовок страницы" required value = "<?=$serviceGet["h1"]?>"/>
	</div>
	<input type = "hidden" name = "SERVICE_ID" value = "<?=$serviceGet["id"]?>"/>
	<div class = "form-group">
		<label for = "inputText">Текст страницы</label>
		<textarea id = "inputText" class = "form-control" name = "SERVICE_TEXT" placeholder = "Введите текст страницы"><?=$serviceGet["text"]?></textarea>
	</div>
	<div class = "checkbox">
		<label>
		<?if($serviceGet["block"] == "0"):?>
			<input type = "checkbox" name = "SERVICE_BLOCK"/>Блокировка
		<?elseif($serviceGet["block"] == "1"):?>
			<input type = "checkbox" name = "SERVICE_BLOCK" checked/>Блокировка
		<?endif;?>
		</label>	
	</div>
	<button class = "btn btn-primary" type = "submit" name = "SERVICE_UPDATE">Изменить</button>
</form>