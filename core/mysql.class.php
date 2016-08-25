<?php
/*
	Ядерный класс выполнения операций над базой данных сайта
*/

class CMySQL{
	protected $conn;
	protected $query;

	public function __construct($connect/*дескриптор подключения*/){
		$this->conn  = $connect;
		$this->query = NULL;
	}
	/*Метод добавления записи в таблицу*/
	public function AddRecord($_tname, $_fields){
		$count       = count($_fields) - 1;
		$this->query = "INSERT INTO `".$_tname."` ";
		$fields      = "(";	
		$values      = " VALUES (";	
		foreach($_fields as $field => $value){
			if($field < $count){
				$fields .= "`".$value[0]."`, ";
				$values .= "'".$value[1]."', ";
			}else if($field == $count){
				$fields .= "`".$value[0]."` ";
				$values .= "'".$value[1]."' ";				
			}	
		}	

		$this->query .= $fields.") ".$values.")";
		if($this->conn->query($this->query)){
			return true;	
		}else return false;
	}
	/*Метод обновления записи*/
	public function UpdateRecord($_tname, $_id, $_fields){
		$count       = count($_fields) - 1;
		$this->query = "UPDATE `".$_tname."` SET ";

		foreach($_fields as $field => $value){
			if($field < $count){
				$fields .= "`".$value[0]."` = '".$value[1]."', ";
			}else if($field == $count){
				$fields .= "`".$value[0]."` = '".$value[1]."' ";			
			}	
		}

		$this->query .= $fields." WHERE `id` = '$_id'";

		if($this->conn->query($this->query)){
			return true;	
		}else return false;			
	}
	/*Метод получения всех записей из таблицы*/
	public function GetRecords($_tname, $_stat/*0-все записи, 1-записи без флага блокировки*/){
		$this->query = "";
		$mass = array();
		
		($_stat == 0) ? $this->query = "SELECT * FROM `".$_tname."`" : $this->query = "SELECT * FROM `".$_tname."` WHERE `block` = '0'";

		if($result = $this->conn->query($this->query)){
			while($row = $result->fetch_assoc()){
				$mass[] = $row;	
			}
		}

		return $mass;
	}
	/*Метод удаления записи из таблицы по id*/
	public function delete($_tname, $_id){
		if($this->conn->query("DELETE FROM `".$_tname."` WHERE `id` = '{$_id}'")){
			return true;	
		}else return false;
	}
	/*Метод получения одной записи из таблицы*/
	public function GetByID($_tname, $_id){
		if($result = $this->conn->query("SELECT * FROM `".$_tname."` WHERE `id` = '{$_id}'")){
			return $result->fetch_assoc();
		}else return false;			
	}
}
?>