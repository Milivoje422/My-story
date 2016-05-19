<? /* Login */ ?>

<?php  
	require "load.php";

if(isset($_POST['logIn'])){

	$arr_name  	= array('name', 'password');
	$arr_max        = array('username' =>20 ,'password' =>40);

	$err1 = empty_fields($arr_names);
	$err2 = max_fields($arr_max);
	$errors = array_merge($err1,$err2);

	if(empty($errors)){

	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);

	$query = make_query("SELECT * FROM users WHERE user_name = '$name'");
	if(mysqli_num_rows($query)==1){
		$row_db = mysqli_fetch_assoc($query);
		if(password_verify($password,$row_db['user_pass'])){
			$_SESSION['name'] = $name;
			$_SESSION['user_id'] = $row_db['id'];
			echo redirect('staff.php');
		}
	}
	}
}

    if(isset($_GET['logout']) && $_GET['logout']==1){
        $msg2='You are logged out.';
        echo '<h2><a href="index.php">Back</a></h2>';
    }
    
    if(!empty($errors)) echo display_errors($errors);
    if(isset($msg)) echo display_msg($msg,'danger');
    if(isset($msg2)) echo display_msg($msg2,'info');
    
?>