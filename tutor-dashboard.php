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


    //"welcome Name" 

?>

<h1> Tutor dashboard </h1>


<input type="button" id="tutor" name="menu_selection" value="Add Time">
<label for="name">Rosalie Ramos</label><br>

<input type="radio" id="tutor" name="menu_selection" value="Delete Time">
<label for="name">Bernardino Almanzar</label><br>

<input type="radio" id="tutor" name="menu_selection" value="Add Subject">
<label for="name">Professor Mark Karol</label>

<input type="radio" id="tutor" name="menu_selection" value="Remove Subject">
<label for="name">Professor Mark Karol</label>


<!-- //add time, remove time, add subject -->


</body>

</html>