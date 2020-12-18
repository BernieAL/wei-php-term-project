<?php

session_start();
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content = "ie=edge"/>
  <!--<link rel="stylesheet" href="./style.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Find a Tutor</title>
  </head>
  <body>


  <?php
    include('docs/includes/header.html');
  ?>
  
  <br></br>
  
  
  <h1> Tutor dashboard </h1>
  <br></br>
  <input type="button" id="tutor" name="menu_selection" value="Add Time">
  <label for="name"></label><br>

  <input type="button" id="tutor" name="menu_selection" value="Remove Time">
  <label for="name"></label><br>

  <input type="button" id="tutor" name="menu_selection" value="Add Subject">
  <label for="name"></label><br>




<?php

   require ('mysqli_connect.php'); // Connect to the db.

      $userID = $_SESSION['user_ID'];
      //echo $userID;
    
     
     //perform query to get saved password for user from DB
      $q = "SELECT * FROM tutors WHERE ID = $userID";
      $result = mysqli_query($dbc,$q);
        
      if($result){  
         
      // Table header.
 	    echo '<table align="center" cellspacing="3" cellpadding="3" width="75%">
            <tr>
              <td align="left"><b>Subject</b></td>
              <td align="left"><b>Days</b></td>
              <td align="left"><b>Times</b></td>
            </tr>';

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            echo '<tr>
                    <td align="left">' . $row['subject'].' </td>
                    <td align="left">' . $row['Day'] .'</td>
                    <td align="left">' . $row['Times'] .'</td>
                  </tr>';
        };
        echo '</table>';
          
      } else {
        echo '<h3> We have no data for you !';
      }
    //echo json_encode($response);
    
?>





<!-- //add time, remove time, add subject -->


</body>

</html>