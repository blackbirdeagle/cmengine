<?php
class CServices{
	public $seo_title;
	public $seo_keywords;
	public $seo_desc;
	public $seo_key;
	public $h1;
	public $text;
	public $block;
	public $conn;

	public function __construct($connect/*дескриптор подключения*/){
		$this->conn         = $connect;
		$this->seo_title    = NULL;
		$this->seo_keywords = NULL;
		$this->seo_desc     = NULL;
		$this->seo_key      = NULL;
		$this->h1           = NULL;
		$this->text         = NULL;
		$this->block        = NULL;		
	}

	/*Метод добавления услуги*/
	public function AddService($title, $keywords, $desc, $key, $h1, $text){
		$this->seo_title    = htmlspecialchars($title);
		$this->seo_keywords = htmlspecialchars($keywords);
		$this->seo_desc     = htmlspecialchars($desc);
		$this->seo_key      = htmlspecialchars($key);
		$this->h1           = htmlspecialchars($h1);
		$this->text         = htmlspecialchars($text);

		if($this->conn->query("INSERT INTO `ywm_services` (`seo_title`, `seo_keywords`, `seo_desc`, `seo_key`, `h1`, `text`, `block`) VALUES ('{$this->seo_title}', '{$this->seo_keywords}', '{$this->seo_desc}', '{$this->seo_key}', '{$this->h1}', '{$this->text}', '0')")){
			return true;	
		}else return false;
	}
	/*Метод получения всех услуг ввиде ассоциативного массива*/
	public function GetServices(){
		$mass = array();
		if($result = $this->conn->query("SELECT * FROM `ywm_services`")){
			while($row = $result->fetch_assoc()){
				$mass[] = $row;	
			}
		}

		return $mass;		
	}	
	/*Метод получения услуги по id*/
	public function GetServiceByID($id){
		if($result = $this->conn->query("SELECT * FROM `ywm_services` WHERE `id` = '{$id}'")){
			return $result->fetch_assoc();
		}else return false;		
	}
	/*Метод обновления данных услуги*/
	public function UpdateService($id, $title, $keywords, $desc, $key, $h1, $text, $block){
		$this->seo_title    = htmlspecialchars($title);
		$this->seo_keywords = htmlspecialchars($keywords);
		$this->seo_desc     = htmlspecialchars($desc);
		$this->seo_key      = htmlspecialchars($key);
		$this->h1           = htmlspecialchars($h1);
		$this->text         = htmlspecialchars($text);
		$this->block        = $block;

		if($this->conn->query("UPDATE `ywm_services` SET `seo_title` = '{$this->seo_title}', `seo_keywords` = '{$this->seo_keywords}', `seo_desc` = '{$this->seo_desc}', `seo_key` = '{$this->seo_key}', `h1` = '{$this->h1}', `text` = '{$this->text}', `block` = '{$this->block}' WHERE `id` = '{$id}'")){
			return true;	
		}else return false;				
	}
	/*Метод удаления услуги*/
	public function DeleteService($id){
		if($this->conn->query("DELETE FROM `ywm_services` WHERE `id` = '{$id}'")){
			return true;	
		}else return false;		
	}
}
?>