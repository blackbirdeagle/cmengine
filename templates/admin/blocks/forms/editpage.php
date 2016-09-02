<form role = "form" method = "POST" action = "">
	<div class = "form-group">
		<label for = "inputTitle">Заголовок окна браузера</label>
		<input id = "inputTitle" class = "form-control text" type = "text" name = "PAGE_TITLE" placeholder = "Введите заголовок окна браузера" required value = "<?=$pageGet["seo_title"]?>"/>
	</div>
	<div class = "form-group">
		<label for = "inputKeywords">Ключевые слова страницы</label>
		<input id = "inputKeywords" class = "form-control" type = "text" name = "PAGE_KEYWORDS" placeholder = "Введите ключевые слова страницы" value = "<?=$pageGet["seo_keywords"]?>"/>
	</div>
	<div class = "form-group">
		<label for = "inputDesc">Описание страницы</label>
		<input id = "inputDesc" class = "form-control" type = "text" name = "PAGE_DESC" placeholder = "Введите описание страницы" value = "<?=$pageGet["seo_desc"]?>"/>
	</div>
	<div class = "form-group">
		<label for = "inputKey">Seo-ключ</label>
		<input id = "inputKey" class = "form-control translit_text" type = "text" name = "PAGE_KEY" placeholder = " Введите seo-ключ" required value = "<?=$pageGet["seo_key"]?>"/>
	</div>
	<div class = "form-group">
		<label for = "inputH1">Заголовок страницы</label>
		<input id = "inputH1" class = "form-control" type = "text" name = "PAGE_H1" placeholder = "Введите заголовок страницы" required value = "<?=$pageGet["h1"]?>"/>
	</div>
	<input type = "hidden" name = "PAGE_ID" value = "<?=$pageGet["id"]?>"/>
	<div class = "form-group">
		<label for = "inputText">Текст страницы</label>
		<textarea id = "inputText" class = "form-control" name = "PAGE_TEXT" placeholder = "Введите текст страницы"><?=$pageGet["text"]?></textarea>
	</div>
	<div class = "checkbox">
		<label>
		<?if($pageGet["block"] == "0"):?>
			<input type = "checkbox" name = "PAGE_BLOCK"/>Блокировка
		<?elseif($pageGet["block"] == "1"):?>
			<input type = "checkbox" name = "PAGE_BLOCK" checked/>Блокировка
		<?endif;?>
		</label>	
	</div>
	<button class = "btn btn-primary" type = "submit" name = "PAGE_UPDATE">Изменить</button>
</form>