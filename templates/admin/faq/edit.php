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
				<textarea class = "form-control" name = "FAQ_QUEST" placeholder = "Текст вопроса" required><?=$faqGet["quest"]?></textarea>
				<input class = "form-control" name = "FAQ_AUTHOR" placeholder = "Автор вопроса" required value = "<?=$faqGet["author"]?>"/>
				<textarea class = "form-control" name = "FAQ_ANSWER" placeholder = "Текст ответа" required><?=$faqGet["answer"]?></textarea>
				<input type = "hidden" name = "FAQ_ID" value = "<?=$faqGet["id"]?>"/>
				<?if($faqGet["block"] == "0"):?>
					<input class = "form-control" type = "checkbox" name = "FAQ_BLOCK"/>Блокировка
				<?elseif($faqGet["block"] == "1"):?>
					<input class = "form-control" type = "checkbox" name = "FAQ_BLOCK" checked/>Блокировка
				<?endif;?>	
				<input class = "form-control" type = "submit" name = "FAQ_UPDATE" value = "Изменить"/>
			</form>
		</div>
	</div>
</div>	

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/footer.php");?>