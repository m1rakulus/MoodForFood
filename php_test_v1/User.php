<?php
	class User {
		public $first_name;
		public $last_name;
		public $email;
		public $password;
		public $contact;
		
		function set_firstname($first_name){
			$this -> first_name = $first_name;
		}
		function get_firstname(){
			return $this -> first_name;
		}
		function set_lastname($last_name){
			$this -> last_name = $last_name;
		}
		function get_lastname(){
			return $this -> last_name;
		}
		function set_email($email){
			$this -> email = $email;
		}
		function get_email(){
			return $this -> email;
		}
		function set_password($password){
			$this -> password = $password;
		}
		function get_password(){
			return $this -> password;
		}
		function set_contact($contact){
			$this -> contact = $contact;
		}
		function get_contact(){
			return $this -> contact;
		}
		
		function writeUser(){
			//open connection with database
			$pdo = new PDO('mysql:host=localhost:3306;dbname=project_v1', 'root', 'lemon123');
			//write all variables to the database
		    $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, email, password, contact, role_id) VALUES (?, ?, ?, ?, ?, 0)");
		    $stmt->execute([$this->first_name, $this->last_name, $this->email, $this->password, $this->contact]);
		}
	}
?>