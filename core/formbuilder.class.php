<?php
/*
Copyright: Alexander Afanasyev
Name: class FormBuilder
Date: 2016-2017
*/
class CFormBuilder{
	
	public function FormStart($method, $action, $type = false){
		if($type)
			echo '<form role = "form" method = "'.$method.'" action = "'.$action.'" enctype = "multipart/form-data">';
		else
			echo '<form role = "form" method = "'.$method.'" action = "'.$action.'">';
	}

	public function input($type, $id, $classes, $cl_wrap, $name, $placeholder, $value, $label = false, $required = false){
		if(!empty($cl_wrap)){echo '<div class = "'.$cl_wrap.'">';}
		
		if($label){
			echo '<label for = "'.$id.'">'.$placeholder.'</label>';
		}

		if($required){
			echo '<input id = "'.$id.'" type = "'.$type.'" class = "'.$classes.'" name = "'.$name.'" placeholder = "'.$placeholder.'" value = "'.$value.'" required />';
		}else{
			echo '<input id = "'.$id.'" type = "'.$type.'" class = "'.$classes.'" name = "'.$name.'" placeholder = "'.$placeholder.'" value = "'.$value.'" />';			
		}
	
		if(!empty($cl_wrap)){echo '</div>';}
	}
	
	public function textarea($id, $classes, $cl_wrap, $name, $placeholder, $value, $label = false, $required = false){
		if(!empty($cl_wrap)){echo '<div class = "'.$cl_wrap.'">';}
		
		if($label){
			echo '<label for = "'.$id.'">'.$placeholder.'</label>';
		}
		
		if($required){
			echo '<textarea id = "'.$id.'" class = "'.$classes.'" name = "'.$name.'" placeholder = "'.$placeholder.'" required>'.$value.'</textarea>';
		}else{
			echo '<textarea id = "'.$id.'" class = "'.$classes.'" name = "'.$name.'" placeholder = "'.$placeholder.'">'.$value.'</textarea>';	
		}		
		
		if(!empty($cl_wrap)){echo '</div>';}
	}
	
	public function button($type, $classes, $name, $text){
		echo '<button class = "'.$classes.'" type = "'.$type.'" name = "'.$name.'">'.$text.'</button>';
	}
	
	public function hidden($name, $value){
		echo '<input type = "hidden" name = "'.$name.'" value = "'.$value.'"/>';
	}
	
	public function checkbox($checked, $name, $cl_wrap, $value){
		if(!empty($cl_wrap)){echo '<div class = "'.$cl_wrap.'">';}
		
		echo '<label>';
		
		if($checked == 1){
			echo '<input type = "checkbox" name = "'.$name.'" checked/>'.$value;
		}else if($checked == 0){
			echo '<input type = "checkbox" name = "'.$name.'"/>'.$value;
		}
		
		echo '</label>';
		
		if(!empty($cl_wrap)){echo '</div>';}
	}

	public function select($id, $classes, $cl_wrap, $name, $text, $arOptions, $label = false, $required = false){
		if(!empty($cl_wrap)){echo '<div class = "'.$cl_wrap.'">';}

		if($label){
			echo '<label for = "'.$id.'">'.$text.'</label>';
		}		
		
		if($required){
			echo '<select id = "'.$id.'" class = "'.$classes.'" name = "'.$name.'" required>';
			foreach($arOptions as $item){
				echo '<option value = "'.$item["VALUE"].'" '.$item["SELECTED"].'>'.$item["TEXT"].'</option>';
			}
			echo '</select>';
		}else{
			echo '<select id = "'.$id.'" class = "'.$classes.'" name = "'.$name.'">';
			foreach($arOptions as $item){
				echo '<option value = "'.$item["VALUE"].'" '.$item["SELECTED"].'>'.$item["TEXT"].'</option>';
			}			
			echo '</select>';			
		}
		
		if(!empty($cl_wrap)){echo '</div>';}	
	}
	
	public function FormFinish(){
		echo '</form>';
	}
}
?>