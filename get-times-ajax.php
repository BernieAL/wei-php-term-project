
<?php
 session_start();
//This scrip is called via ajax from schedule.php -->
/*
	this gets name of tutor from 'selected_choice' 
	and gets all information on the selected tutor by name from DB

	then stores in array
	then converts array to json and returns that ajax call from schedule.php

*/

//to make it simple, choose tutor, display time from sql query, select a time, on time select, make them login, then show confirtmation message they have been booked


 require ('mysqli_connect.php'); // Connect to the db.




if(isset($_GET['selected_choice'])){
   
	$return_arr = array();
	$selected_choice = $_GET['selected_choice'];
	
	

   //perform query to get saved password for user from DB
     //perform query to get saved password for user from DB
	
	 $q = "SELECT ID FROM users WHERE Name = '$selected_choice'";
	 $result = mysqli_query($dbc,$q);
	 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	 $userID = $row['ID'];

	 $t = "SELECT * FROM tutors WHERE ID = '$userID'";
	 $result2 = mysqli_query($dbc,$t);
	 if($result2){
		while($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
				
				
				$subject = $row2['subject'];
				$day = $row2['Day'];
				$times = $row2['Times'];
				//echo($subject);
				//echo($day);
				//echo($time);
				$response = json_encode($subject);
				
				$return_arr[] = array("id"=>$userID,
									  "subject" => $subject,
									  "day" => $day,
									  "times" => $times); 
		};

	} else {
      $myObj = "NO DATA FOR SELECTED TUTOR";
      $response = json_encode($myObj);
   }
}

echo json_encode($return_arr);
mysqli_close($dbc); // Close the database connection.

?>