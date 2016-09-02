<form role = "form" method = "POST" action = "" enctype = "multipart/form-data">
	<div class = "form-group">
		<label for = "inputName">Название работы</label>
		<input id = "inputName" class = "form-control" type = "text" name = "PORTFOLIO_NAME" placeholder = "Введите название работы" required>
	</div>
	<div class = "form-group">
		<label for = "inputImage">Изображение работы</label>
		<input id = "inputImage" class = "form-control" type = "file" name = "PORTFOLIO_IMAGE" placeholder = "Изображение" required/>
	</div>
	<button class = "btn btn-primary" type = "submit" name = "PORTFOLIO_ADD">Добавить</button>
</form>