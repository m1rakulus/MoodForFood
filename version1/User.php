<?php
require_once 'User_Roles.php';
	class User extends User_Roles{
		private $first_name;
		private $last_name;
		private $email;
		private $password;
		private $contact;
		
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
		
	}
?>