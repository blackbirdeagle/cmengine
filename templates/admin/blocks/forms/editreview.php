<form method = "POST" action = "">
	<textarea class = "form-control" name = "REVIEW_TEXT" placeholder = "Текст отзыва" require><?=$reviewGet["text"]?></textarea>
	<input class = "form-control" type = "text" name = "REVIEW_AUTHOR" placeholder = "Автор отзыва" required value = "<?=$reviewGet["author"]?>"/>	
	<input class = "form-control" type = "text" name = "REVIEW_DATA" placeholder = "Дата отзыва" required value = "<?=$reviewGet["data"]?>">
	<input type = "hidden" name = "REVIEW_ID" value = "<?=$reviewGet["id"]?>"/>			
	<?if($reviewGet["block"] == "0"):?>
		<input class = "form-control" type = "checkbox" name = "REVIEW_BLOCK"/>Блокировка
	<?elseif($reviewGet["block"] == "1"):?>
		<input class = "form-control" type = "checkbox" name = "REVIEW_BLOCK" checked/>Блокировка
	<?endif;?>	
	<input class = "form-control" type = "submit" name = "REVIEW_UPDATE" value = "Изменить"/>
</form>