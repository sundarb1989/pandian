<?
$no = '9629017893';
echo $mob = strlen($no);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>calender</title> 
		<style type="text/css"> 			
			#tabs{ margin: 20px -20px; border: none; }
			#tabs, #ui-datepicker-div, .ui-datepicker{ font-size: 85%; }
			.clear{ clear: both; }
			
			
			.example-container input{ border: solid 1px #aaa; padding: 4px; width: 175px; }
		</style> 
		
		<link rel="stylesheet" media="all" type="text/css" href="css/jquery-ui.css" />
		<link rel="stylesheet" media="all" type="text/css" href="css/jquery-ui-timepicker-addon.css" />
		
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="js/jquery-ui-sliderAccess.js"></script>
		<script type="text/javascript">
			
			$(function(){
				$('#tabs').tabs();
		
				$('.example-container > pre').each(function(i){
					eval($(this).text());
				});
			});
			
		</script>
	</head> 
		<body> 

					<div class="example-container">
						<p>Format the time:</p>
						<div>
					 		<input type="text" name="basic_example_3" id="basic_example_3" value="" />
						</div>					
<pre style="display:none;">
$('#basic_example_3').datetimepicker({
	timeFormat: "hh:mm tt"
});
</pre>

	 	</div>
	</body> 
</html>