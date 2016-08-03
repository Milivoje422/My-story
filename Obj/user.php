<?php 

// user settings 

private $id;
private $password;
private $userStatus;
public  $name;
public  $lastname;
public  $username;
public  $UserImg;


	class user{

			public function pullUser($id) {

				global $conn;

				$query = "SELECT * FROM users WHERE id = '$id'";
				$result = mysqli_query($conn,$query);
				confirm_query($result);

				if(count($result) == 1){
					return $result;
				}
			}

			public function setUserSettings(){

				$id = pullUser($id);
				$this->id = $id;
				


			}
	}
