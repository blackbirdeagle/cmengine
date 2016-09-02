<form role = "form" method = "POST" action = "">
	<div class = "form-group">
		<label for = "inputQuote">Текст цитаты</label>
		<textarea id = "inputQuote" class = "form-control" name = "QUOTE_TEXT" placeholder = "Введите текст цитаты" required></textarea>
	</div>
	<div class = "form-group">
		<label for = "inputAuthor">Автор цитаты</label>
		<input id = "inputAuthor" class = "form-control" type = "text" name = "QUOTE_AUTHOR" placeholder = "Введите имя автора" required/>
	</div>
	<button class = "btn btn-primary" type = "submit" name = "QUOTE_ADD">Добавить</button>
</form>