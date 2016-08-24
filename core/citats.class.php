<?php
class CCitats{
	public $conn;
	public $text;
	public $author;
	public $block;

	public function __construct($connect/*дескриптор подключения*/){
		$this->conn   = $connect;
		$this->text   = NULL;
		$this->author = NULL;
		$this->block  = NULL;
	}
	/*Метод добавления цитаты*/
	public function AddCitata($text, $author){
		$this->text   = htmlspecialchars($text);
		$this->author = htmlspecialchars($author);

		if($this->conn->query("INSERT INTO `ywm_citats` (`text`, `author`, `block`) VALUES ('{$this->text}', '{$this->author}', '0')")){
			return true;	
		}else return false;
	}
	/*Метод получения всех цитат ввиде ассоциативного массива*/
	public function GetCitats(){
		$mass = array();
		if($result = $this->conn->query("SELECT * FROM `ywm_citats`")){
			while($row = $result->fetch_assoc()){
				$mass[] = $row;	
			}
		}

		return $mass;		
	}	
	/*Метод получения цитаты по id*/
	public function GetCitataByID($id){
		if($result = $this->conn->query("SELECT * FROM `ywm_citats` WHERE `id` = '{$id}'")){
			return $result->fetch_assoc();
		}else return false;		
	}
	/*Метод обновления данных цитаты*/
	public function UpdateCitata($id, $text, $author, $block){
		$this->text   = htmlspecialchars($text);
		$this->author = htmlspecialchars($author);
		$this->block  = $block;

		if($this->conn->query("UPDATE `ywm_citats` SET `text` = '{$this->text}', `author` = '{$this->author}', `block` = '{$this->block}' WHERE `id` = '{$id}'")){
			return true;	
		}else return false;				
	}
	/*Метод удаления цитаты*/
	public function DeleteCitata($id){
		if($this->conn->query("DELETE FROM `ywm_citats` WHERE `id` = '{$id}'")){
			return true;	
		}else return false;		
	}
}
?>