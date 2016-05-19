<?php /* DB connection */ ?>

<?php 
/*Database credentials:*/
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASS','');
	define('DB_NAME','my_story');
/*Database connection constants*/

		
	$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	
	if(!$conn){//if connection failed
		die('Connection to database failed.'.misql_error());
	//die function - exits from php script	
	}
	
	/* Set internal character encoding to UTF-8 */
	mb_internal_encoding("UTF-8");
	mysqli_query($conn,"SET CHARACTER SET utf8");
	mysqli_query($conn,"SET NAMES utf8");
	
?>