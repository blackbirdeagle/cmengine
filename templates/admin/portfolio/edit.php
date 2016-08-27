<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/header.php");?>

<div class = "container">
	<div class = "row">
		<div class = "col-md-12">
			<?=$enter?>
		</div>
	</div>
	<div class = "row">
		<div class = "col-md-3 left-sidebar">
			<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/left_menu.php");?>
		</div>
		<div class = "col-md-9">
			<form method = "POST" action = "">
				<img width = "300" src = "<?=$portfolioGet["image"]?>" alt = "">
				<input class = "form-control" type = "text" name = "PORTFOLIO_NAME" placeholder = "Название работы" required value = "<?=$portfolioGet["name"]?>"/>	
				<input type = "hidden" name = "PORTFOLIO_IMAGE" value = "<?=$portfolioGet["image"]?>"/>
				<input type = "hidden" name = "PORTFOLIO_ID" value = "<?=$portfolioGet["id"]?>"/>			
				<?if($portfolioGet["block"] == "0"):?>
					<input class = "form-control" type = "checkbox" name = "PORTFOLIO_BLOCK"/>Блокировка
				<?elseif($portfolioGet["block"] == "1"):?>
					<input class = "form-control" type = "checkbox" name = "PORTFOLIO_BLOCK" checked/>Блокировка
				<?endif;?>	
				<input class = "form-control" type = "submit" name = "PORTFOLIO_UPDATE" value = "Изменить"/>
			</form>
		</div>
	</div>
</div>	

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/footer.php");?>