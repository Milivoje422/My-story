<?   /* SignUp */  ?>

<?php
require 'load.php';



if(isset($_POST['signUp_submit'])){

    
                $arr_names  =   array('name','lastname','email','pass','conf-pass');
                $arr_max    =   array('name'=>40,'lastname'=>40,'email'=>255,'pass'=>255,'conf-pass'=>255);

                $err1   = empty_fields($arr_names);
                $err2   = max_fields($arr_max);
                $errors = array_merge($err1,$err2);
             
            if(empty($errors) && ($_POST['pass'] == $_POST['conf-pass']) ){
                       
		        $name       =  mysqli_real_escape_string($conn,$_POST['name']);
                $username   =  mysqli_real_escape_string($conn,$_POST['username']);
                $lastname   =  mysqli_real_escape_string($conn,$_POST['lastname']);
                $email      =  mysqli_real_escape_string($conn,$_POST['email']);
                $pass       =  mysqli_real_escape_string($conn,$_POST['pass']);
                $conf_pass  =  mysqli_real_escape_string($conn,$_POST['conf-pass']);
                
//                $old_location    =      $_FILES['image']['tmp_name'];
//                $folder_name     =      urlencode($name);
//                if(!is_dir('uploads/'.$name)){
//                    mkdir('uploads/'.$folder_name);
//                } 
//                $new_location   =   'uploads/'.$folder_name.'/'.$_FILES['image']['name'];
                
		$hash_pass = password_hash($pass,PASSWORD_DEFAULT);
		
    		    $query="INSERT INTO users SET 
                username        =       '$username',
    		    user_name	    =       '$name',
    		    user_lastname   =	    '$lastname',
                user_email      =       '$email',
    		    user_pass       =       '$hash_pass',
                user_registered =       now()";
                    
//                if(move_uploaded_file($old_location,$new_location)){
//                $query.=" , user_image = '$new_location' ";}
                $result = mysqli_query($conn,$query);
		        confirm_query($result,$conn);

                
                $query1="SELECT * FROM users WHERE username='$username'";
                $result1=mysqli_query($conn,$query1);
                confirm_query($result1,$conn);
                
                $row_db=mysqli_fetch_assoc($result1);
        		if(password_verify($pass,$row_db['user_pass'])){
        			$_SESSION['username']	=   $username;
        			$_SESSION['user_id']    =   $row_db['user_id'];      
                                setcookie($name,$username, $row_db['user_id'], time() + (86400 * 30), "/"); // 86400 = 1 day
                            
                            
        //            $message='You are create account . Your username is:'.$name;
        //            mail($email,'Magazine Notification',$message);
                        
                    echo redirect("dashboard.php");
                    
            
                
                }
            }
        }

?>





