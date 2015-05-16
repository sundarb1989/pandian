<?
session_start();
if($_SESSION['login_id']!='')
{
header('Location: logout.php');
}
	if(isset($_SESSION['ERRMSG']) && is_array($_SESSION['ERRMSG']) && count($_SESSION['ERRMSG']) >0 ) {
		$err = "<table align=right>";
		foreach($_SESSION['ERRMSG'] as $msg) {
			$err .= "<tr><td><font color=yellow size=2px>" . $msg . "</font></td></tr>"; 
		}
		$err .= "</table>";
		unset($_SESSION['ERRMSG']);
	}
?>
<!DOCTYPE HTML>
<html dir="ltr" lang="en-US">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>AACHI</title>

	<!--- CSS --->
	<link rel="stylesheet" href="css/style-login.css" type="text/css" />
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/selectivizr.js"></script>
		<!---<noscript><link rel="stylesheet" href="css/fallback.css" /></noscript>-->
	</head>

	<body>
		<div id="container">	
			<form action="log.php" method="post">
				<div class="login">LOGIN</div>
				<div class="username-text">Username:</div>
				<div class="password-text">Password:</div>
				<div class="username-field">
					<input type="text" name="username" value="" />
				</div>
				<div class="password-field">
				<input type="password" name="password" value="" />
				</div>
				<div style="float:left; margin:40px 0px 0px 50px;">
				<font color="yellow" size=1><?php echo $err; ?></font>
				<font color="yellow" size=1><?php if(isset($_REQUEST['log'])) { ?>User account doesn't activated <? }?></font>
				<font color="yellow" size=1><?php if(isset($_REQUEST['inval'])) { ?>Invalid User<? }?></font>
				</div>
				<!--<input type="checkbox" name="remember-me" id="remember-me" /><label for="remember-me">Remember me</label>
				<div class="forgot-usr-pwd">Forgot <a href="#">username</a> or <a href="#">password</a>?</div>-->
				<div style="float:right; margin-right:10px;"><input type="submit" name="submit" value="GO" /></div>
			</form>
		</div>
		<div id="footer">
			Powered By <a href="http://www.rsalesarm.com" target="_blank">Rsales Arm IT Services</a> 2013 - <a href="http://www.aachigroup.com" target="_blank">Aachi Masala</a>
		</div>
	</body>
</html>
