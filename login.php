<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/ xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<!--CSS-->
<style>
body {
font-family: Lucida Console, Courier, monospace;
}

input[type=text], input[type=password] {
padding: 10px;
width: 100%;
margin: 15px 0;
border-radius: 10px;
box-sizing: border-box;
}

button {
padding: 10px;
cursor: pointer;
width: 20%;
border-radius: 10px;
color: white;
background-color: #03d3fc;
}

button:hover {
opacity: 0.5;
}

form {
border: 5px double #03d3fc;
padding: 10px;
margin: 5px;;
}


</style>

</head>
<body>

<h2>Login Form</h2>


<p id="results"></p>
<form action="login.php" method="post" id="login-form">

        <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" id="user_ID" placeholder="Enter ID" name="user_ID" required>

        <label for="password"><b>Password</b></label>
        <input type="password" id="password" placeholder="Enter Password" name="password" required>

        <input type="radio" id="selected_choice" name="role" value="student">
        <label for="name">Student</label>
        <input type="radio" id="selected_choice" name="role" value="professor">
        <label for="name">Professor</label>
        <input type="radio" id="selected_choice" name="role" value="tutor">
        <label for="name">Tutor </label>
        <br></br>
        
        <button type="submit" >Login</button>
        </div>

</form>


<!--  login.js jquery to handle form submission and then make ajax request to
      login-ajax.php. 

      Then this js will recieve back a response from login-ajax.php and then update
      the page to display the response returned from the server side php
 
 -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!--<script type="text/javascript" src="js/login.js"></script> -->
<script>

// Script 15.10 - login.js

	 // This script is included by login.php.
	 // This script handles and validates the form submission.
	 // This script then makes an Ajax request of login_ajax.php.
	
	 // Do something when the document is ready:
	 $(function() {
     
      console.log("made it to the javascript from login.php");
     // Assign an event handler to the form:
       $('#login-form').submit(function(event) {
          event.preventDefault();

        console.log("form has been submitted");
          // Initialize some variables:
          var user_ID, password,selected_choice;
      // Validate the userID:
          if ($('#user_ID').val().length > 0) {
          // Get the user_ID:
             user_ID = $('#user_ID').val();
        }
      // Validate the password:
          if ($('#password').val().length > 0) {
                 password = $('#password').val();
              } 
 
      //get selected_choice
            //selected_choice = $('#selected_choice')
            //var radios = $("input[type='radio']");
            //selected_choice = radios.filter(":checked");
           
           selected_choice = $('input[name="role"]:checked').val();
     
            console.log(user_ID)
            console.log(password)
            console.log(selected_choice)
 
 

    // Create an object for the form data:
          var data = new Object();
          data.user_ID = user_ID;
          data.password = password;
          data.selected_choice = selected_choice;
                    
    // Create an object of Ajax options:
          var options = new Object();
          
        // Establish each setting:
          options.data = data;
          options.dataType = 'text';
          options.type = 'get';
          options.success = function(response){
                    

            
              // Worked:
              if (response == 'CORRECT') {
                
                console.log('response returned from login-ajax.php says: CORRECT ');
                
                // Hide the form:
                //$('#login-form').hide();
                
                // Show a message:
                //$('#results').text('You are now logged in!');
                                            
            } else if (response == 'INCORRECT') {
                console.log('response returned from login-ajax.php says: INCORRECT');
            
                /*
            } else if (response == 'INCOMPLETE') {
                $('#results').text('Please provide an email address and a password!');
                    
            } else if (response == 'INVALID_EMAIL') {
                $('#results').text('Please provide your email address!');
            }
            */
            }
            //my notes- route to another page
          }; 
          // End of success.
              
             options.url = 'login-ajax.php';
           
            
             // Perform the request:
              $.ajax(options);
              
              // Return false to prevent an actual form submission:
              return false;
              
         }); // End of form submission.
    }); // End of document ready.
    </script>

    </body>
    </html>