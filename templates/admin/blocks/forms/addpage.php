<form role = "form" method = "POST" action = "">
	<div class = "form-group">
		<label for = "inputTitle">Заголовок окна браузера</label>
		<input id = "inputTitle" class = "form-control text" type = "text" name = "PAGE_TITLE" placeholder = "Введите заголовок окна браузера" required/>
	</div>
	<div class = "form-group">
		<label for = "inputKeywords">Ключевые слова</label>
		<input id = "inputKeywords" class = "form-control" type = "text" name = "PAGE_KEYWORDS" placeholder = "Введите ключевые слова страницы" />
	</div>
	<div class = "form-group">
		<label for = "inputDesc">Описание страницы</label>
		<input id = "inputDesc" class = "form-control" type = "text" name = "PAGE_DESC" placeholder = "Введите описание страницы"/>
	</div>
	<div class = "form-group">
		<label for = "inputKey">Seo-ключ</label>
		<input id = "inputKey" class = "form-control translit_text" type = "text" name = "PAGE_KEY" placeholder = "Введите seo-ключ" required/>
	</div>
	<div class = "form-group">
		<label for = "inputH1">Заголовок страницы</label>
		<input id = "inputH1" class = "form-control" type = "text" name = "PAGE_H1" placeholder = "Введите заголовок страницы H1" required/>
	</div>
	<div class = "form-group">
		<label for = "inputText">Текст страницы</label>
		<textarea id = "inputText" class = "form-control" name = "PAGE_TEXT" placeholder = "Введите текст страницы"></textarea>
	</div>
	<button class="btn btn-primary" type = "submit" name = "PAGE_ADD">Добавить</button>
</form>