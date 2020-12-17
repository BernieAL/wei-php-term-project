<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	
<style type="text/css">
label {
font-weight: bold;
color: #300ACC;
}
</style>	
	
<title>Schedule</title>


</head>
<body>

<?php
 
 include('docs/includes/header.html');
?>

<br>

<form action="get-times.php" method="post">

<p>Please choose a tutor to see available times</p>

<input type="radio" id="tutor" name="Professor Don-Wei" value="Professor Don-Wei">
<label for="name">Professor Don-Wei</label><br>

<input type="radio" id="tutor" name="Rosalie Ramos" value="Rosalie Ramos">
<label for="name">Rosalie Ramos</label><br>

<input type="radio" id="tutor" name="Bernardino Almanzar" value="Bernardino Almanzar">
<label for="name">Bernardino Almanzar</label><br>

<input type="radio" id="tutor" name="Professor Mark Karol" value="Professor Mark Karol">
<label for="name">Professor Mark Karol</label>

<p><input type="submit" value= "Next" name="submit"></p>

</form>



</body>
</html>