<?php
/*
Copyright: Alexander Afanasyev
Name: class Quotes
Date: 2016-2017
*/
class CQuotes extends CMySQL{
	private $table;
	private $text;
	private $author;
	private $block;

	public function __construct($connect/*дескриптор подключения*/){
		parent::__construct($connect);
		$this->table  = PREFIX."quotes";
		$this->text   = NULL;
		$this->author = NULL;
		$this->block  = NULL;
	}
	/*Метод добавления цитаты*/
	public function AddQuote($text, $author){
		$this->text   = htmlspecialchars($text);
		$this->author = htmlspecialchars($author);

		$fields[0] = array("text", $this->text);
		$fields[1] = array("author", $this->author);
		$fields[2] = array("block", 0);

		return parent::AddRecord($this->table, $fields);
	}
	/*Метод получения всех цитат ввиде ассоциативного массива*/
	public function GetQuotes($stat, $sort){
		return parent::GetRecords($this->table, $stat, $sort);		
	}	
	/*Метод получения цитаты по id*/
	public function GetQuoteByID($id){
		return parent::GetByID($this->table, $id);	
	}
	/*Метод обновления данных цитаты*/
	public function UpdateQuote($id, $text, $author, $block){
		$this->text   = htmlspecialchars($text);
		$this->author = htmlspecialchars($author);
		$this->block  = $block;

		$fields[0] = array("text", $this->text);
		$fields[1] = array("author", $this->author);
		$fields[2] = array("block", $this->block);

		return parent::UpdateRecord($this->table, $id, $fields);			
	}
	/*Метод удаления цитаты*/
	public function DeleteQuote($id){
		return parent::delete($this->table, $id);		
	}
}
?>