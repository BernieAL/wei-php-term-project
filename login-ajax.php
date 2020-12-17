<!-- This scrip is called via ajax from login.php -->
<!-- 
   The script expects to receive two values in the URL:
    an user_ID and a password. The script returns a string
    indicating the results.
-->

<?php

//to make it simple, choose tutor, display time from sql query, select a time, on time select, make them login, then show confirtmation message they have been booked


 require ('mysqli_connect.php'); // Connect to the db.
 


//$userID = $_GET["user_ID"];
//$pass = $_GET["password"];
//$user_type = $_GET["selected_choice"];

$userID = "123123";
$password = "test";


if(isset($userID)){

   $q = "SELECT Password FROM users WHERE ID=$userID";
   $db_user_pass = mysqli_query($dbc,$q);
   if($password == $db_user_pass) {
     echo 'CORRECT';
   } else {
      echo $db_user_pass;
   }
} else {
   echo 'INCORRECT';
}


   
?>