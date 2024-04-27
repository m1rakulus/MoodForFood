<?php
	class User_Roles {
		private $role_id;
		function set_roleid($id){
			$this -> role_id = $id;
		}
		
		function get_role(){
			return $this-> role_id;
		}
	}
?>