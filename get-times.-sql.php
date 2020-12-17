<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/
DTD/xhtml1-transitional.dtd">
	 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	 <head>
	 	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 	 <title>Form Feedback</title>
	 	 <style type="text/css" title="text/css" media="all">
	 	 .error {
	 	 	 font-weight: bold;
	 	 	 color: #C00;
	 	 }
	 	 </style>
	 </head>
	 <body>
     <?php # Script 2.4 - get-time.php
     

	 $selected_Tutor = $_REQUEST['name'];
	 
	//fetch times for name
	//put in array
	//iterate array and make table for all times, making them selectable

	define('DB_USER','[*username*]')
	define('DB_PASSWORD',['password*]');
	define('DB_HOST','localhost');
	define('DB_NAME', 'sitename');
	
	//establish connection 
	$dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR die ('could not connect to MySQL: ' .mysqli_connect_error());
	
	//page content file
	//set encoding
	mysqli_set_charset($dbc, 'utf8');
	//prepare sql statement 
	$r = mysqli_query($dbc,"SELECT * FROM users");
	$num = mysqli_mysqli_num_rows($r);
	echo "Number of rows returned $num";
	
	while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
	
			echo
	}
	



	 //on submit or next of selected time, route to login page









	 