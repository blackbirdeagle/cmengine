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
				<input class = "form-control" type = "text" name = "USER_NAME" placeholder = "Имя" required/>
				<input class = "form-control" type = "text" name = "USER_LOGIN" placeholder = "Логин" required/>
				<input class = "form-control" type = "password" name = "USER_PASS" placeholder = "Пароль" required/>
				<input class = "form-control" type = "submit" name = "USER_ADD" value = "Добавить"/>
			</form>
		</div>
	</div>

</div>	

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/admin/blocks/footer.php");?>