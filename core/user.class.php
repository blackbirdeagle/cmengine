<?php
class User{
	public $login;
	public $hash;
	public $name;
	public $conn;

	public function __construct($connect/*дескриптор подключения*/){
		$this->login = NULL;
		$this->hash = NULL;
		$this->name = NULL;
		$this->conn = $connect;
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
	public function GetUsers(){
		$mass = array();
		if($result = $this->conn->query("SELECT * FROM `ywm_users`")){
			while($row = $result->fetch_assoc()){
				$mass[] = $row;	
			}
		}

		return $mass;
	}
	/*Метод получения пользователя по id*/
	public function GetUserByID($id){
		if($result = $this->conn->query("SELECT * FROM `ywm_users` WHERE `id` = '{$id}'")){
			return $result->fetch_assoc();
		}else return false;
	}
	/*Метод добавления пользователя в базу*/
	public function AddUser($login, $pass, $name){
		$this->login = htmlspecialchars($login);
		$this->hash = md5($pass);
		$this->name = htmlspecialchars($name);	

		if($this->conn->query("INSERT INTO `ywm_users` (`login`, `pass`, `name`) VALUES ('{$this->login}', '{$this->hash}', '{$this->name}')")){
			return true;
		}else return false;	
	}
	/*Метод обновления данных о пользователе*/
	public function UpdateUser($id, $login, $pass, $name){
		$this->login = htmlspecialchars($login);
		$this->hash = md5($pass);
		$this->name = htmlspecialchars($name);

		if($this->conn->query("UPDATE `ywm_users` SET `login` = '{$this->login}', `pass` = '{$this->hash}', `name` = '{$this->name}' WHERE `id` = '{$id}'")){
			return true;
		}else return false;		
	}
	/*Метод удаления пользователя*/
	public function DeleteUser($id){
		if($this->conn->query("DELETE FROM `ywm_users` WHERE `id` = '{$id}'")){
			return true;	
		}else return false;
	}
}
?>