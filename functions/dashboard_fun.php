<?php require 'load.php';  

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    $result = make_query("SELECT * FROM users WHERE user_id = '$user_id'");
    if(mysqli_num_rows($result)>0){
        return $result;
    }else{
        return false;
    }
    $username = $_SESSION['name'];
}else{
    echo redirect("index.php");
}

?>