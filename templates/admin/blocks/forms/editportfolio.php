<form role = "form" method = "POST" action = "">
	<img class = "img-responsive img-thumbnail" width = "300" src = "<?=$portfolioGet["image"]?>" alt = ""/>
	<div class = "form-group">
		<label for = "inputName">Название работы</label>
		<input id = "inputName" class = "form-control" type = "text" name = "PORTFOLIO_NAME" placeholder = "Введите название работы" required value = "<?=$portfolioGet["name"]?>"/>	
	</div>
	<input type = "hidden" name = "PORTFOLIO_IMAGE" value = "<?=$portfolioGet["image"]?>"/>
	<input type = "hidden" name = "PORTFOLIO_ID" value = "<?=$portfolioGet["id"]?>"/>
	<div class = "checkbox">
		<label>			
		<?if($portfolioGet["block"] == "0"):?>
			<input type = "checkbox" name = "PORTFOLIO_BLOCK"/>Блокировка
		<?elseif($portfolioGet["block"] == "1"):?>
			<input type = "checkbox" name = "PORTFOLIO_BLOCK" checked/>Блокировка
		<?endif;?>
		</label>	
	</div>
	<button class = "btn btn-primary" type = "submit" name = "PORTFOLIO_UPDATE">Изменить</button>
</form>