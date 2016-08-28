<?php
if($_SESSION["USER"] == ""){
	header("Location: /admin/login.php");
}else{
	$enter = 'Здравствуйте '.$_SESSION["USER"];
}
?>