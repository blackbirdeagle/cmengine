<?php
class CFaq{
	public $quest;
	public $author;
	public $answer;
	public $block;
	public $conn;

	public function __construct($connect/*дескриптор подключения*/){
		$this->conn   = $connect;
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

		if($this->conn->query("INSERT INTO `ywm_faq` (`quest`, `author`, `answer`, `block`) VALUES ('{$this->quest}', '{$this->author}', '{$this->answer}', '0')")){
			return true;	
		}else return false;
	}
	/*Метод выборки всех вопросов ввиде ассоциативного массива*/
	public function GetFaq(){
		$mass = array();
		if($result = $this->conn->query("SELECT * FROM `ywm_faq`")){
			while($row = $result->fetch_assoc()){
				$mass[] = $row;	
			}
		}

		return $mass;		
	}
	/*Метод получения вопроса по id*/
	public function GetFaqByID($id){
		if($result = $this->conn->query("SELECT * FROM `ywm_faq` WHERE `id` = '{$id}'")){
			return $result->fetch_assoc();
		}else return false;		
	}
	/*Метод обновления данных вопроса*/
	public function UpdateFaq($id, $quest, $author, $answer, $block){
		$this->quest  = htmlspecialchars($quest);
		$this->author = htmlspecialchars($author);
		$this->answer = htmlspecialchars($answer);
		$this->block  = $block;

		if($this->conn->query("UPDATE `ywm_faq` SET `quest` = '{$this->quest}', `author` = '{$this->author}', `answer` = '{$this->answer}', `block` = '{$this->block}' WHERE `id` = '{$id}'")){
			return true;	
		}else return false;				
	}
	/*Метод удаления вопроса*/
	public function DeleteFaq($id){
		if($this->conn->query("DELETE FROM `ywm_faq` WHERE `id` = '{$id}'")){
			return true;	
		}else return false;		
	}
}
?>