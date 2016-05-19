<?php /* Load */ ?>
<?php 
	require "db_conn/session/session.php";
	require "db_conn/db_connection.php";
	require "functions.php";
	if(is_logged()){ require "login.php"; }
	require "form_functions.php";
?>