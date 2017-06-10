<?php
echo "git test";
    ob_start();
	require_once("class/db.php"); //Connect to SQL
	session_start(); //Start session for writing

	function Fix($str) { //Clean the fields
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}

	$errmsg = array(); //Array to store errors
	
	$errflag = false; //Error flag

	$username = Fix($_POST['username']); //Username
	$password = Fix($_POST['password']); //Password

	//Check Username
	if($username == '') {
		$errmsg[] = 'Username missing';
		$errflag = true;
	}

	//Check Password
	if($password == '') {
		$errmsg[] = 'Password missing';
		$errflag = true;
	}
	

	//Create SELECT query
	$qry = "SELECT DISTINCT emp_code, `password`, emp_id, role_id, emp_name FROM `employee_master` WHERE `emp_code` = '$username' AND `password` = '$password' GROUP BY emp_code";

	$result = mysql_query($qry);
	
	if(mysql_num_rows($result) == 0 && $username != '' && $password != '') {
		$errmsg[] = 'Invalid username or password';
		$errflag = true;
	}


	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG'] = $errmsg;
		session_write_close();
		header("location: index.php");
		exit();
	}
	//Check whether the query was successful or not
	
	if(mysql_num_rows($result) == 1) 
	{
		while($row = mysql_fetch_assoc($result)) 
		{
				$_SESSION['emp_id'] = $row['emp_id'];
				$_SESSION['login_id'] = $row['emp_code'];
				$_SESSION['role_id'] = $row['role_id'];
			
		}
		if(isset($_SESSION['login_id']))
		{
		 header("location: pages/view_employee.php");
		}
		else
		{
		 header("location: index.php?log=err");
		}
		
	}
	else {
		$_SESSION['ERRMSG'] = "Invalid";
		session_write_close();
		header("location: index.php");
		exit();
	    }
	ob_flush();
my revision check
pandin conflict
pandian test
?>
