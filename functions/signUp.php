<?   /* SignUp */  ?>

<?php
require_once('includes/load.php');



if(isset($_POST['signUp_submit'])){

    
	$arr_names  =   array('username','email','password','confirm-password');
	$arr_max    =   array('username'=>40,'email'=>255,'password'=>255);
	
        
                $err1   = empty_fields($arr_names);
                $err2   = max_fields($arr_max);
                $errors = array_merge($err1,$err2);
     
                
              
             if(empty($errors) OR ($_POST['password'] == $_POST['confirm-password']) ){
                       

		$name     = mysqli_real_escape_string($conn,$_POST['name']);
                $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
                $email    = mysqli_real_escape_string($conn,$_POST['email']);
                $location = mysqli_real_escape_string($conn,$_POST['lastname']);
                $pass     = mysqli_real_escape_string($conn,$_POST['password']);
                
                
                $old_location    =      $_FILES['image']['tmp_name'];
                $folder_name     =      urlencode($name);
                if(!is_dir('uploads/'.$name)){
                    mkdir('uploads/'.$folder_name);
                } 
                
                $new_location   =   'uploads/'.$folder_name.'/'.$_FILES['image']['name'];
		$hash_pass = password_hash($password,PASSWORD_DEFAULT);
		
		$query="INSERT INTO users SET 
		user_name	=       '$name',
		user_lastname   =	'$lastname',
                user_email      =       '$email',
		user_location   =	'$location',
                user_pass       =       '$pass',
                user_registered =       'now()'";
                
                if(move_uploaded_file($old_location,$new_location)){
                $query.=" , user_image = '$new_location' ";}
                $result =   mysqli_query($conn,$query);
		confirm_query($result);

                
                $query1="SELECT * FROM users WHERE user_name='$name'";
                $result1=mysqli_query($conn,$query1);
                confirm_query($result1);
                
                $row_db=mysqli_fetch_assoc($result1);
		if(password_verify($password,$row_db['password'])){
			$_SESSION['name']	=   $name;
			$_SESSION['user_id']	=   $row_db['id'];
                

                    echo redirect("staff.php");
                    
//            $message='You are create account . Your username is:'.$username;
//            mail($email,'Magazine Notification',$message);
//                
                
                }
            }
        }

?>





