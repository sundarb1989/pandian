<?php
	session_start();	
	session_unset($_SESSION['emp_id']);
	session_unset($_SESSION['login_id']);
	session_unset($_SESSION['role_id']);
	session_destroy();
	header("location: index.php");
?>