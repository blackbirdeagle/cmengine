<form role = "form" method = "POST" action = "">
	<div class = "form-group">
		<label for = "inputText">Текст отзыва</label>
		<textarea id = "inputText" class = "form-control" name = "REVIEW_TEXT" placeholder = "Введите текст отзыва" require><?=$reviewGet["text"]?></textarea>
	</div>
	<div class = "form-group">
		<label for = "inputAuthor">Автор отзыва</label>
		<input id = "inputAuthor" class = "form-control" type = "text" name = "REVIEW_AUTHOR" placeholder = "Введите имя автора" required value = "<?=$reviewGet["author"]?>"/>	
	</div>
	<div class = "form-group">
		<label for = "inputData">Дата отзыва</label>
		<input id = "inputData" class = "form-control" type = "text" name = "REVIEW_DATA" placeholder = "Введите дату отзыва" required value = "<?=$reviewGet["data"]?>">
	</div>
	<input type = "hidden" name = "REVIEW_ID" value = "<?=$reviewGet["id"]?>"/>			
	<div class = "checkbox">
		<label>
		<?if($reviewGet["block"] == "0"):?>
			<input type = "checkbox" name = "REVIEW_BLOCK"/>Блокировка
		<?elseif($reviewGet["block"] == "1"):?>
			<input type = "checkbox" name = "REVIEW_BLOCK" checked/>Блокировка
		<?endif;?>
		</label>	
	</div>
	<button class = "btn btn-primary" type = "submit" name = "REVIEW_UPDATE" >Изменить</button>
</form>