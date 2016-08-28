<form method = "POST" action = "">
	<textarea class = "form-control" name = "QUOTE_TEXT" placeholder = "Текст цытаты" require><?=$quoteGet["text"]?></textarea>
	<input class = "form-control" type = "text" name = "QUOTE_AUTHOR" placeholder = "Автор цитаты" required value = "<?=$quoteGet["author"]?>"/>	
	<input type = "hidden" name = "QUOTE_ID" value = "<?=$quoteGet["id"]?>"/>			
	<?if($quoteGet["block"] == "0"):?>
		<input class = "form-control" type = "checkbox" name = "QUOTE_BLOCK"/>Блокировка
	<?elseif($quoteGet["block"] == "1"):?>
		<input class = "form-control" type = "checkbox" name = "QUOTE_BLOCK" checked/>Блокировка
	<?endif;?>	
	<input class = "form-control" type = "submit" name = "QUOTE_UPDATE" value = "Изменить"/>
</form>