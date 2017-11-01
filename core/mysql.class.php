<?php
/*
Copyright: Alexander Afanasyev
Name: Core class of DB
Date: 2016-2017
*/
/*
	Ядерный класс выполнения операций над базой данных сайта
	Содержит общие методы обработки данных таблиц	
*/

class CMySQL{
	protected $conn;
	protected $query;
	protected $sort;

	public function __construct($connect/*дескриптор подключения*/){
		$this->conn  = $connect;
		$this->query = NULL;
		$this->sort  = NULL; 
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
	public function GetRecords($_tname, $_stat/*0-все записи, 1-записи без флага блокировки*/, $_sort/*Поле сортировки*/){
		$this->query = "";
		$mass = array();
		$this->sort = $_sort;
		//($_stat == 0) ? $this->query = "SELECT * FROM `".$_tname."`" : $this->query = "SELECT * FROM `".$_tname."` WHERE `block` = '0'";

		if($_stat == 0) $this->query = "SELECT * FROM `".$_tname."` ORDER BY `".$this->sort."` ASC";
		else if($_stat == 1) $this->query = "SELECT * FROM `".$_tname."` WHERE `block` = '0' ORDER BY `".$this->sort."` ASC";

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
	/*Метод определяет количество записей в таблице*/
	public function RecCnt($t_name){
		if($result = $this->conn->query("SELECT COUNT(*) FROM `".$t_name."`")){
			$row = $result->fetch_assoc();
			return $row["COUNT(*)"];
		}else return false;
	}
	/*Метод определения максимального значения поля sort*/
	public function MaxSort($t_name){
		if($result = $this->conn->query("SELECT MAX(`sort`) FROM `".$t_name."`")){
			$row = $result->fetch_assoc();
			return $row["MAX(`sort`)"];
		}else return false;		
	}
	/*Метод поднятия позиции записи в списке по полю sort*/
	public function RecUp($_id, $t_name){
		$res1 = $this->conn->query("SELECT `sort` FROM `".$t_name."` WHERE `id` = '$_id'");
		$row1 = $res1->fetch_assoc();
		$sort1 = $row1["sort"];
		$id1 = $_id;
		$res2 = $this->conn->query("SELECT `id`, `sort` FROM `".$t_name."` WHERE `sort` < '{$row1["sort"]}' ORDER BY `sort` DESC LIMIT 0, 1");
		$row2 = $res2->fetch_assoc();
		$sort2 = $row2["sort"];
		$id2 = $row2["id"];

		$this->conn->query("UPDATE `".$t_name."` SET `sort` = '$sort2' WHERE `id` = '$id1'");
		$this->conn->query("UPDATE `".$t_name."` SET `sort` = '$sort1' WHERE `id` = '$id2'");
	}
	/*Метод опускания позиции записи в списке по полю sort*/
	public function RecDown($_id, $t_name){
		$res1 = $this->conn->query("SELECT `sort` FROM `".$t_name."` WHERE `id` = '$_id'");
		$row1 = $res1->fetch_assoc();
		$sort1 = $row1["sort"];
		$id1 = $_id;
		$res2 = $this->conn->query("SELECT `id`, `sort` FROM `".$t_name."` WHERE `sort` > '{$row1["sort"]}' ORDER BY `sort` ASC LIMIT 0, 1");
		$row2 = $res2->fetch_assoc();
		$sort2 = $row2["sort"];
		$id2 = $row2["id"];

		$this->conn->query("UPDATE `".$t_name."` SET `sort` = '$sort2' WHERE `id` = '$id1'");
		$this->conn->query("UPDATE `".$t_name."` SET `sort` = '$sort1' WHERE `id` = '$id2'");
	}
}
?>