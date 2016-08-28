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
			<div class = "breadcrumbs">
				<a href = "/admin/">Главная</a> / <a href = "/admin/faq/">Вопрос-ответ</a> / <span><?=$faqGet["author"]?></span> 
			</div>
			<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/forms/editfaq.php");?>
		</div>
	</div>
</div>	

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/footer.php");?>