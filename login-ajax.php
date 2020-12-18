
<?php

//This scrip is called via ajax from login.php -->
  //The script expects to receive two values in the URL:
    //an user_ID and a password. The script returns a string
    //indicating the results.

//to make it simple, choose tutor, display time from sql query, select a time, on time select, make them login, then show confirtmation message they have been booked


 require ('mysqli_connect.php'); // Connect to the db.
 

//$return_arr = array();
//$userID = $_GET['user_ID'];
//$password = $_GET['password'];

   
//}



if(isset($_GET['user_ID'], $_GET['password'])){
   
   $userID = $_GET['user_ID'];
   $password = $_GET['password'];

   //perform query to get saved password for user from DB
      $q = "SELECT password FROM users WHERE ID = '$userID'";
      $result = mysqli_query($dbc,$q);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $db_user_pass = $row['password'];
      
   if($password == $db_user_pass){
      $myObj = "CORRECT";
      $response = json_encode($myObj);
   } else {
      $myObj = "INCORRECT";
      $response = json_encode($myObj);
   }
}
echo json_encode($response);

?>