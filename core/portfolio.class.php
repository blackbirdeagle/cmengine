<?php
/*
Copyright: Alexander Afanasyev
Name: class Portfolio
Date: 2016-2017
*/
class CPortfolio extends CMySQL{
	private $table;
	private $preview_image;
	private $detail_image;
	private $name;
	private $block;

	public function __construct($connect/*дескриптор подключения*/){
		parent::__construct($connect);
		$this->table = PREFIX."portfolio";
		$this->image = NULL;
		$this->name  = NULL;
		$this->block = NULL;
	}
	/*Метод получения всех работ в портфолио ввиде ассоциативного массива*/
	public function GetPortfolio($stat, $sort){
		return parent::GetRecords($this->table, $stat, $sort);
	}
	/*Метод добавления работы в портфолио*/
	public function AddPortfolio($image, $name){
		$this->image = $image;
		$this->name  = htmlspecialchars($name);

		$fields[0] = array("image", $this->image);
		$fields[1] = array("name", $this->name);
		$fields[2] = array("block", 0);

		$rec_cnt = parent::RecCnt($this->table);

		if($rec_cnt == 0) $fields[3] = array("sort", 1);
		else $fields[3] = array("sort", parent::MaxSort($this->table) + 1);

		return parent::AddRecord($this->table, $fields);
	}
	/*Метод получения работы из портфолио по id*/
	public function GetPortfolioByID($id){
		return parent::GetByID($this->table, $id);	
	}
	/*Метод обновления данных отзыва*/
	public function UpdatePortfolio($id, $name, $image, $block){
		$this->image = $image;
		$this->name  = htmlspecialchars($name);
		$this->block = $block;

		$fields[0] = array("name", $this->name);
		$fields[1] = array("image", $this->image);
		$fields[2] = array("block", $this->block);

		return parent::UpdateRecord($this->table, $id, $fields);			
	}	
	/*Метод удаления работы из портфолио*/
	public function DeletePortfolio($id){
		$work = parent::GetByID($this->table, $id);
		unlink($_SERVER["DOCUMENT_ROOT"].$work["image"]);
		return parent::delete($this->table, $id);		
	}
	/*Метод поднятия позиции работы в списке по полю sort*/
	public function PortfolioUp($id){
		return parent::RecUp($id, $this->table);
	}
	/*Метод опускуния позиции работы в списке по полю sort*/
	public function PortfolioDown($id){
		return parent::RecDown($id, $this->table);
	}
}
?>