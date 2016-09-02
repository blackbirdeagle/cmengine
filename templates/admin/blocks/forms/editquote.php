<form role = "form" method = "POST" action = "">
	<div class = "form-group">
		<label for = "inputText">Текст цитаты</label>
		<textarea id = "inputText" class = "form-control" name = "QUOTE_TEXT" placeholder = "Введите текст цитаты" require><?=$quoteGet["text"]?></textarea>
	</div>
	<div class = "form-group">
		<label for = "inputAuthor">Автор цитаты</label>
		<input id = "inputAuthor" class = "form-control" type = "text" name = "QUOTE_AUTHOR" placeholder = "Введите имя автора" required value = "<?=$quoteGet["author"]?>"/>	
	</div>
	<input type = "hidden" name = "QUOTE_ID" value = "<?=$quoteGet["id"]?>"/>		
	<div class = "checkbox">
		<label>	
		<?if($quoteGet["block"] == "0"):?>
			<input type = "checkbox" name = "QUOTE_BLOCK"/>Блокировка
		<?elseif($quoteGet["block"] == "1"):?>
			<input type = "checkbox" name = "QUOTE_BLOCK" checked/>Блокировка
		<?endif;?>
		</label>	
	</div>
	<button class = "btn btn-primary" type = "submit" name = "QUOTE_UPDATE">Изменить</button>
</form>