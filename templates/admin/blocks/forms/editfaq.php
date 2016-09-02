<form role = "form" method = "POST" action = "">
	<div class = "form-group">
		<label for = "inputQuest">Текст вопроса</label>
		<textarea id = "inputQuest" class = "form-control" name = "FAQ_QUEST" placeholder = "Введите текст вопроса" required><?=$faqGet["quest"]?></textarea>
	</div>
	<div class = "form-group">
		<label for = "inputAuthor">Автор вопроса</label>
		<input id = "inputAuthor" class = "form-control" name = "FAQ_AUTHOR" placeholder = "Введите имя автора" required value = "<?=$faqGet["author"]?>"/>
	</div>
	<div class = "form-group">
		<label for = "inputAnswer">Текст ответа</label>
		<textarea id = "inputAnswer" class = "form-control" name = "FAQ_ANSWER" placeholder = "Введите текст ответа" required><?=$faqGet["answer"]?></textarea>
	</div>
	<input type = "hidden" name = "FAQ_ID" value = "<?=$faqGet["id"]?>"/>
	<div class = "checkbox">
		<label>
			<?if($faqGet["block"] == "0"):?>
				<input type = "checkbox" name = "FAQ_BLOCK"/>Блокировка
			<?elseif($faqGet["block"] == "1"):?>
				<input type = "checkbox" name = "FAQ_BLOCK" checked/>Блокировка
			<?endif;?>
		</label>
	</div>		
	<button class = "btn btn-primary" type = "submit" name = "FAQ_UPDATE">Изменить</button>
</form>