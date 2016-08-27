<?php
/*Дамп ассоциативного массива*/
function ar_dump($array){
	echo '<pre>'; print_r($array); echo '</pre>';
}
/*Функция загрузки файла на сервер*/
function file_upload($_file, $_dir){
	if($_file["error"] == 0 && $_file["size"] > 0){
		$arr = explode(".", basename($_file["name"]));
		$name = md5($arr[0]).".".$arr[1];
		$_dir .= $name;
		if(@move_uploaded_file($_file["tmp_name"], $_dir)) return true;
		else return false;
	}else return false;
}
?>