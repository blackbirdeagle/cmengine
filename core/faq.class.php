<?php
class CFaq extends CMySQL{
	public $quest;
	public $author;
	public $answer;
	public $block;

	public function __construct($connect/*дескриптор подключения*/){
		parent::__construct($connect);
		$this->table  = PREFIX."faq";
		$this->quest  = NULL;
		$this->author = NULL;
		$this->answer = NULL;
		$this->block  = NULL;	
	}

	/*Метод добавления вопроса*/
	public function AddFaq($quest, $author, $answer){
		$this->quest  = htmlspecialchars($quest);
		$this->author = htmlspecialchars($author);
		$this->answer = htmlspecialchars($answer);

		$fields[0] = array("quest", $this->quest);
		$fields[1] = array("author", $this->author);
		$fields[2] = array("answer", $this->answer);
		$fields[3] = array("block", 0);

		$rec_cnt = parent::RecCnt($this->table);

		if($rec_cnt == 0) $fields[4] = array("sort", 1);
		else $fields[4] = array("sort", parent::MaxSort($this->table) + 1);

		return parent::AddRecord($this->table, $fields);
	}
	/*Метод выборки всех вопросов ввиде ассоциативного массива*/
	public function GetFaq($stat){
		return parent::GetRecords($this->table, $stat);		
	}
	/*Метод получения вопроса по id*/
	public function GetFaqByID($id){
		return parent::GetByID($this->table, $id);	
	}
	/*Метод обновления данных вопроса*/
	public function UpdateFaq($id, $quest, $author, $answer, $block){
		$this->quest  = htmlspecialchars($quest);
		$this->author = htmlspecialchars($author);
		$this->answer = htmlspecialchars($answer);
		$this->block  = $block;

		$fields[0] = array("quest", $this->quest);
		$fields[1] = array("author", $this->author);
		$fields[2] = array("answer", $this->answer);
		$fields[3] = array("block", $this->block);

		return parent::UpdateRecord($this->table, $id, $fields);				
	}
	/*Метод удаления вопроса*/
	public function DeleteFaq($id){
		return parent::delete($this->table, $id);		
	}
	/*Метод поднятия позиции вопроса в списке по полю sort*/
	public function FaqUp($id){
		return parent::RecUp($id, $this->table);
	}
	/*Метод опускуния позиции вопроса в списке по полю sort*/
	public function FaqDown($id){
		return parent::RecDown($id, $this->table);
	}
}
?>