<?php /* Functions */ ?>
<?php   

	// function file_load($value_file){
		
	// 	if(isset($value_file)){
			
	// 		include $value_file ;
	// 	}else{
	// 		echo "Parameter is not right!";
	// 	}
	// }

	function redirect($location){
		$output='<script>';
		$output=$output."window.location.href='$location'";
		$output=$output.'</script>';

	return $output;
	}
		

	function confirm_query($result){
		if(!$result){
			echo 'Query to database failed!' .mysqli_error($result);
		}
	}

	function make_query($query){
		global $conn;

		$result = mysqli_query($conn,$query);
		confirm_query($result);

		if(count($result) == 1){
			return $result;
		}else{
			die('Query to database is wrong!');
		}
	}

	function get_users_query(){
		global $conn;
                
		$query = "SELECT * FROM users";
		$result = mysqli_query($conn,$query);
		confirm_query($result);

		if($result){
			return $result;
		}
	}


?>