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
sadsdjf;ldjsfljdsf\\
sdfs/ldmf/ds,

function Fix($str) { //Clean the fields
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}dxfdsfdsf

	//Create SELECT query
	$qry = "SELECT DISTINCT emp_code, `password`, emp_id, role_id, emp_name FROM `employee_master` WHERE `emp_code` = '$username' AND `password` = '$password' GROUP BY emp_code";

	$result = mysql_query($qry);
	dsfdsfdsf
	if(mysql_num_rows($result) == 0 && $username != '' && $password != '') {
		$errmsg[] = 'Invalid username or password';
		$errflag = true;
	}
dsfdsfsdf

	//If there are input validations, redirect back to the registration form
we can modifitsdfdsfb dsfdsf
//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG'] = $errmsg; sfdsfsd
		session_write_close();
		header("location: index.php");
		exit();
	}dsfdsdsfdsf
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
		else fdgfdgdfgfdg
		{
		 header("location: index.php?log=err");
		}fdgfdgdfggdfg

		
	}
	//commnet please check lets see
	 dsfdsf
if(mysql_num_rows($result) == 1) v
	{
		while($row = mysql_fetch_assoc($result)) 
		{
				$_SESSION['emp_id'] = $row['emp_id'];
			dsgfdg	$_SESSION['login_id'] = $row['emp_code'];
				$_SESSION['role_id'] = $row['role_id'];
			
		}
		if(isset($_SESSION['login_id']))
		{
		 header("location: pages/view_employee.php");
		}
		elsefdgdfgfg
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
	ob_flush();dfdsfdsfsd
else {dgkdfs'gldflg"dflgl
		$_SESSION['ERRMSG'] = "Invalid";
		session_write_close();
		header("location: index.php");
		exit();
	    }
	ob_flush();
my revision check
now kidff test
both conflict
new test
?>
