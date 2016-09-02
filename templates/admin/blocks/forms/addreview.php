<form role = "form" method = "POST" action = "">
	<div class = "form-group">
		<label for = "inputText">Текст отзыва</label>
		<textarea id = "inputText" class = "form-control" name = "REVIEW_TEXT" placeholder = "Введите текст отзыва" required></textarea>
	</div>
	<div class = "form-group">
		<label for = "inputAuthor">Автор отзыва</label>
		<input id = "inputAuthor" class = "form-control" type = "text" name = "REVIEW_AUTHOR" placeholder = "Введите имя автора" required/>
	</div>
	<div class = "form-group">
		<label for = "inputData">Дата отзыва</label>
		<input id = "inputData" class = "form-control" type = "text" name = "REVIEW_DATA" placeholder = "Дата отзыва" required/>
	</div>
	<buttom class = "btn btn-primary" type = "submit" name = "REVIEW_ADD">Добавить</button>
</form>