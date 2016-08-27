<?php
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
	public function GetPortfolio($stat){
		return parent::GetRecords($this->table, $stat);
	}
	/*Метод добавления работы в портфолио*/
	public function AddPortfolio($image, $name){
		$this->image = $image;
		$this->name  = htmlspecialchars($name);

		$fields[0] = array("image", $this->image);
		$fields[1] = array("name", $this->name);
		$fields[2] = array("block", 0);

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
}
?>