<?php
require_once 'UserTools.class.php';
require_once 'DB.class.php';


class User {

	public $id;
	public $username;
	public $hashedPassword;
	public $email;
	public $joinDate;
	public $firstname;
	public $lastname; 
	public $company;

	//these belong to the user class. this file is useful in determining how the object is created and related to how our DB will be setup. 

	//Constructor is called whenever a new object is created.
	//Takes an associative array with the DB row as an argument.

	//this constructor - the data inside represents the characteristics or properties we want for the class. Our users will need an ID (auto incremented) 

	function __construct($data) {
		$this->id = (isset($data['id'])) ? $data['id'] : "";
		$this->username = (isset($data['username'])) ? $data['username'] : "";
		$this->hashedPassword = (isset($data['password'])) ? $data['password'] : "";
		$this->email = (isset($data['email'])) ? $data['email'] : "";
		$this->joinDate = (isset($data['join_date'])) ? $data['join_date'] : "";
		$this->firstname = (isset($data['firstname'])) ? $data['firstname'] : "";
		$this->lastname = (isset($data['lastname'])) ? $data['lastname'] : "";
		$this->company = (isset($data['company'])) ? $data['company'] : "";
	}

	//the save function - we will be saving the information as new user or update user. 

	public function save($isNewUser = false) {
		//create a new database object.
		$db = new DB();
		
		//if the user is already registered and we're
		//just updating their info.
		if(!$isNewUser) {
			//set the data array
			$data = array(
				"username" => "'$this->username'",
				"password" => "'$this->hashedPassword'",
				"email" => "'$this->email'",
				"firstname" => "'$this->firstname'",
				"lastname" => "'$this->lastname'",
				"company" => "'$this->company'"
			);
			
			//update the row in the database
			//reference the db variable, send it to the update method and sending the data array from above and inserting into the user's table. 
			$db->update($data, 'users', 'id = '.$this->id);
		} else {
		//if the user is being registered for the first time.
			$data = array(
				"username" => "'$this->username'",
				"password" => "'$this->hashedPassword'",
				"email" => "'$this->email'",
				"firstname" => "'$this->firstname'",
				"lastname" => "'$this->lastname'",
				"company" => "'$this->company'",
				"join_date" => "'".date("Y-m-d H:i:s",time())."'"
			);
			
			$this->id = $db->insert($data, 'users');
			$this->joinDate = time();
		}
		return true;
	}
	
}

?>