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
				<textarea class = "form-control" name = "CITATA_TEXT" placeholder = "Текст цытаты" require><?=$citataGet["text"]?></textarea>
				<input class = "form-control" type = "text" name = "CITATA_AUTHOR" placeholder = "Автор цитаты" required value = "<?=$citataGet["author"]?>"/>	
				<input type = "hidden" name = "CITATA_ID" value = "<?=$citataGet["id"]?>"/>			
				<?if($citataGet["block"] == "0"):?>
					<input class = "form-control" type = "checkbox" name = "CITATA_BLOCK"/>Блокировка
				<?elseif($citataGet["block"] == "1"):?>
					<input class = "form-control" type = "checkbox" name = "CITATA_BLOCK" checked/>Блокировка
				<?endif;?>	
				<input class = "form-control" type = "submit" name = "CITATA_UPDATE" value = "Изменить"/>
			</form>
		</div>
	</div>
</div>	

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/footer.php");?>