<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content = "ie=edge"/>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Find a Tutor</title>
  </head>
  <body>

<?php
    include('docs/includes/header.html');


   if(isset($_GET['user_ID']){
   
      $userID = $_GET['user_ID'];
      $password = $_GET['password'];

      //perform query to get saved password for user from DB
        $q = "SELECT password FROM tutors WHERE ID = '$userID'";
        $result = mysqli_query($dbc,$q);
        
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          // get all values for this specific tutor
        }
      }
echo json_encode($response);

?>


    
?>

<h1> Tutor dashboard </h1>


<input type="button" id="tutor" name="menu_selection" value="Add Time">
<label for="name">Rosalie Ramos</label><br>

<input type="button" id="tutor" name="menu_selection" value="Remove Time">
<label for="name"></label><br>

<input type="button" id="tutor" name="menu_selection" value="Add Subject">
<label for="name"></label><br>




<!-- //add time, remove time, add subject -->


</body>

</html>