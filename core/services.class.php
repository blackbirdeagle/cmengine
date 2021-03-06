<?php
/*
Copyright: Alexander Afanasyev
Name: class Services
Date: 2016-2017
*/
class CServices extends CMySQL{
	public $seo_title;
	public $seo_keywords;
	public $seo_desc;
	public $seo_key;
	public $h1;
	public $text;
	public $block;

	public function __construct($connect/*дескриптор подключения*/){
		parent::__construct($connect);
		$this->table  = PREFIX."services";
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

		$fields[0] = array("seo_title", $this->seo_title);
		$fields[1] = array("seo_keywords", $this->seo_keywords);
		$fields[2] = array("seo_desc", $this->seo_desc);
		$fields[3] = array("seo_key", $this->seo_key);
		$fields[4] = array("h1", $this->h1);
		$fields[5] = array("text", $this->text);
		$fields[6] = array("block", 0);

		$rec_cnt = parent::RecCnt($this->table);
		
		if($rec_cnt == 0) $fields[7] = array("sort", 1);
		else $fields[7] = array("sort", parent::MaxSort($this->table) + 1);

		return parent::AddRecord($this->table, $fields);
	}
	/*Метод получения всех услуг ввиде ассоциативного массива*/
	public function GetServices($stat, $sort){
		return parent::GetRecords($this->table, $stat, $sort);		
	}	
	/*Метод получения услуги по id*/
	public function GetServiceByID($id){
		return parent::GetByID($this->table, $id);	
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

		$fields[0] = array("seo_title", $this->seo_title);
		$fields[1] = array("seo_keywords", $this->seo_keywords);
		$fields[2] = array("seo_desc", $this->seo_desc);
		$fields[3] = array("seo_key", $this->seo_key);
		$fields[4] = array("h1", $this->h1);
		$fields[5] = array("text", $this->text);
		$fields[6] = array("block", $this->block);

		return parent::UpdateRecord($this->table, $id, $fields);				
	}
	/*Метод удаления услуги*/
	public function DeleteService($id){
		return parent::delete($this->table, $id);	
	}
	/*Метод поднятия позиции услуги в списке по полю sort*/
	public function ServiceUp($id){
		return parent::RecUp($id, $this->table);
	}
	/*Метод опускуния позиции услуги в списке по полю sort*/
	public function ServiceDown($id){
		return parent::RecDown($id, $this->table);
	}
}
?>