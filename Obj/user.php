<?php 

// user settings 


	class user{

		private $id;
		private $password;
		private $userStatus;
		public  $name;
		public  $lastname;
		public  $username;
		public  $UserImg;


			public function userId(){
				return $this->id;
			}
			public function userPass(){
				return $this->password;
			}
			public function userStatus(){
				return $this->userStatus;
			}
			public function user_name(){
				return $this->name;
			}
			public function user_lastname(){
				return $this->lastname;
			}
			public function userName(){
				return $this->username;
			}
			public function getUserImg(){
				return $this->UserImg;
			}

			public function getAllUserData($user_id){
				return array_shift(self::query_data("SELECT * FROM ".self::$table_name." WHERE id='{$user_id}'"));
			}







	}
