<?php

session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/ xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<!--CSS-->
<style>
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

<form action="get-times.php" method="post" id='tutor-form'>

<p>Please choose a tutor to see available times</p>

<input type="radio" id="tutor" name="selectec" value="Professor Don-Wei">
<label for="name">Professor Don-Wei</label><br>

<input type="radio" id="tutor" name="Rosalie" value="Rosalie">
<label for="name">Rosalie Ramos</label><br>

<input type="radio" id="tutor" name="Bernardino" value="Bernardino Almanzar">
<label for="name">Bernardino Almanzar</label><br>

<input type="radio" id="tutor" name="Professor Mark Karol" value="Professor Mark Karol">
<label for="name">Professor Mark Karol</label>

<p><input type="submit" value= "Next" name="submit"></p>

</form>
<p id="results"></p>
<script>

$(document).ready(function(){ 
     
     console.log("made it to the javascript from schedule.php");
    
     // Assign an event handler to the form:
      $('#tutor-form').submit(function(event) {
           event.preventDefault();
           console.log("form has been submitted");
           
            //Get selected choice (Student, Professor, Tutor)
            selected_choice = $('input[id="tutor"]:checked').val();
            console.log(selected_choice);

            var data = new Object();
		    data.selected_choice = selected_choice;

             //make ajax request
            $.ajax({
			url: 'get-times-ajax.php',
			type: 'get',
			data: data,
			dataType: 'json',
			success: function(response){
				
                var returned  = JSON.parse(response);   
                $("#results").append(returned);
                }
            });
            return false;
		});
		
  
    });//end ready

</script>



</body>
</html>