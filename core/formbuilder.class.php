<?php
/*
Copyright: Alexander Afanasyev
Name: class FormBuilder
Date: 2016-2017
*/
class CFormBuilder{
	
	public function FormStart($method, $action, $type = false){
		if($type)
			echo '<form method = "'.$method.'" action = "'.$action.'" enctype = "multipart/form-data">';
		else
			echo '<form method = "'.$method.'" action = "'.$action.'">';
	}

	public function Field($vid, $type, $classes, $name, $placeholder, $value, $required = false){
		if($vid == "textarea"){
			if($required)
				echo '<textarea class = "'.$classes.'" name = "'.$name.'" placeholder = "'.$placeholder.'" required>'.$value.'</textarea>';
			else
				echo '<textarea class = "'.$classes.'" name = "'.$name.'" placeholder = "'.$placeholder.'">'.$value.'</textarea>';
		}else if($vid == "input"){
			if($required)
				echo '<'.$vid.' type = "'.$type.'" class = "'.$classes.'" name = "'.$name.'" placeholder = "'.$placeholder.'" value = "'.$value.'" required />';
			else
				echo '<'.$vid.' type = "'.$type.'" class = "'.$classes.'" name = "'.$name.'" placeholder = "'.$placeholder.'" value = "'.$value.'" />';			
		}else if($vid == "select"){

		}
	}

	public function FormFinish(){
		echo '</form>';
	}
}
?>