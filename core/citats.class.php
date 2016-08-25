<?php
class CCitats extends CMySQL{
	private $table;
	private $text;
	private $author;
	private $block;

	public function __construct($connect/*дескриптор подключения*/){
		parent::__construct($connect);
		$this->table  = PREFIX."citats";
		$this->text   = NULL;
		$this->author = NULL;
		$this->block  = NULL;
	}
	/*Метод добавления цитаты*/
	public function AddCitata($text, $author){
		$this->text   = htmlspecialchars($text);
		$this->author = htmlspecialchars($author);

		$fields[0] = array("text", $this->text);
		$fields[1] = array("author", $this->author);
		$fields[2] = array("block", 0);

		return parent::AddRecord($this->table, $fields);
	}
	/*Метод получения всех цитат ввиде ассоциативного массива*/
	public function GetCitats($stat){
		return parent::GetRecords($this->table, $stat);		
	}	
	/*Метод получения цитаты по id*/
	public function GetCitataByID($id){
		return parent::GetByID($this->table, $id);	
	}
	/*Метод обновления данных цитаты*/
	public function UpdateCitata($id, $text, $author, $block){
		$this->text   = htmlspecialchars($text);
		$this->author = htmlspecialchars($author);
		$this->block  = $block;

		$fields[0] = array("text", $this->text);
		$fields[1] = array("author", $this->author);
		$fields[2] = array("block", $this->block);

		return parent::UpdateRecord($this->table, $id, $fields);			
	}
	/*Метод удаления цитаты*/
	public function DeleteCitata($id){
		return parent::delete($this->table, $id);		
	}
}
?>