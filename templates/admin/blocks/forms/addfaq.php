<form role = "form" method = "POST" action = "">
	<div class = "form-group">
		<label for = "inputQuest">Текст вопроса</label>
		<textarea id = "inputQuest" class = "form-control" name = "FAQ_QUEST" placeholder = "Введите вопрос"></textarea>
	</div>	
	<div class = "form-group">
		<label for = "inputAuthor">Автор вопроса</label>
		<input id = "inputAuthor" class = "form-control" name = "FAQ_AUTHOR" placeholder = "Имя автора" required/>
	</div>	
	<div class = "form-group">
		<label for = "inputAnswer">Текст ответа</label>
		<textarea id = "inputAnswer" class = "form-control" name = "FAQ_ANSWER" placeholder = "Текст ответа" placeholder></textarea>
	</div>	
	<button type = "submit" name = "FAQ_ADD" class="btn btn-primary">Добавить</button>
</form>