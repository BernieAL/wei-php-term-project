
<?php

//This scrip is called via ajax from login.php -->
  //The script expects to receive two values in the URL:
    //an user_ID and a password. The script returns a string
    //indicating the results.

//to make it simple, choose tutor, display time from sql query, select a time, on time select, make them login, then show confirtmation message they have been booked


 require ('mysqli_connect.php'); // Connect to the db.
 


//$userID = $_GET["user_ID"];
//$pass = $_GET["password"];
//$user_type = $_GET["selected_choice"];

$userID = $_GET['user_ID'];
$password = $_GET['password'];

$db_user_pass = "test";


echo  'CORRECT';

   
?>