<?php
class CUser extends CMySQL{
	public $login;
	public $hash;
	public $name;
	public $image;
	public $politic;

	public function __construct($connect/*дескриптор подключения*/){
		parent::__construct($connect);
		$this->table   = PREFIX."users";
		$this->login   = NULL;
		$this->hash    = NULL;
		$this->name    = NULL;
		$this->image   = NULL;
		$this->politic = NULL;
	}
	/*Проверка существования пользователя в базе*/
	public function ValidateUser($login, $password){
		$this->login = htmlspecialchars($login);
		$this->hash = md5($password);

		$result = $this->conn->query("SELECT * FROM `ywm_users` WHERE `login` = '{$this->login}' AND `pass` = '{$this->hash}'");

		if($user = $result->fetch_assoc()){
			$this->login = $user["login"];
			$this->hash = $user["pass"];
			$this->name = $user["name"];

			return true;
		}else return false;
	}
	/*Метод получения всех пользователей в виде ассоциативного массива*/
	public function GetUsers($stat, $sort){
		return parent::GetRecords($this->table, $stat, $sort);
	}
	/*Метод получения пользователя по id*/
	public function GetUserByID($id){
		return parent::GetByID($this->table, $id);
	}
	/*Метод добавления пользователя в базу*/
	public function AddUser($login, $pass, $name, $image, $politic){
		$this->login   = htmlspecialchars($login);
		$this->hash    = md5($pass);
		$this->name    = htmlspecialchars($name);	
		$this->image   = $image;
		$this->politic = $politic;

		$fields[0] = array('login', $this->login);
		$fields[1] = array('pass', $this->hash);
		$fields[2] = array('name', $this->name);
		$fields[3] = array('image', $this->image);
		$fields[4] = array('politic', $this->politic);

		return parent::AddRecord($this->table, $fields);	
	}
	/*Метод обновления данных о пользователе*/
	public function UpdateUser($id, $login, $pass, $name){
		$this->login = htmlspecialchars($login);
		$this->hash = md5($pass);
		$this->name = htmlspecialchars($name);

		if($pass != ""){
			$fields[0] = array('login', $this->login);
			$fields[1] = array('pass', $this->hash);
			$fields[2] = array('name', $this->name);
		}else{
			$fields[0] = array('login', $this->login);
			$fields[1] = array('name', $this->name);
		}	

		return parent::UpdateRecord($this->table, $id, $fields);		
	}
	/*Метод удаления пользователя*/
	public function DeleteUser($id){
		$work = parent::GetByID($this->table, $id);
		unlink($_SERVER["DOCUMENT_ROOT"].$work["image"]);
		return parent::delete($this->table, $id);
	}
}
?>