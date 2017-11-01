<?php
/*
Copyright: Alexander Afanasyev
Name: class Rewiews
Date: 2016-2017
*/
class CReviews extends CMySQL{
	private $table;
	private $author;
	private $text;
	private $data;
	private $block;

	public function __construct($connect/*дескриптор подключения*/){
		parent::__construct($connect);
		$this->table  = PREFIX."reviews";
		$this->author = NULL;
		$this->text   = NULL;
		$this->data   = NULL;
		$this->block  = NULL;		
	}
	/*Метод получения всех цитат ввиде ассоциативного массива*/
	public function GetReviews($stat, $sort){
		return parent::GetRecords($this->table, $stat, $sort);		
	}
	/*Метод добавления отзыва*/
	public function AddReview($text, $author, $data){
		$this->text   = htmlspecialchars($text);
		$this->author = htmlspecialchars($author);
		$this->data   = htmlspecialchars($data);

		$fields[0] = array("text", $this->text);
		$fields[1] = array("author", $this->author);
		$fields[2] = array("data", $this->data);
		$fields[3] = array("block", 0);

		return parent::AddRecord($this->table, $fields);
	}
	/*Метод получения отзыва по id*/
	public function GetReviewByID($id){
		return parent::GetByID($this->table, $id);	
	}
	/*Метод обновления данных отзыва*/
	public function UpdateReview($id, $text, $author, $data, $block){
		$this->text   = htmlspecialchars($text);
		$this->author = htmlspecialchars($author);
		$this->data   = htmlspecialchars($data);
		$this->block  = $block;

		$fields[0] = array("text", $this->text);
		$fields[1] = array("author", $this->author);
		$fields[2] = array("data", $this->data);
		$fields[3] = array("block", $this->block);

		return parent::UpdateRecord($this->table, $id, $fields);			
	}
	/*Метод удаления отзыва*/
	public function DeleteReview($id){
		return parent::delete($this->table, $id);		
	}
}
?>