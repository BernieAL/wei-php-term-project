


// Script 15.10 - login.js

	 // This script is included by login.php.
	 // This script handles and validates the form submission.
	 // This script then makes an Ajax request of login_ajax.php.
	
	 // Do something when the document is ready:
$(document).ready(function(){ 
     
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
		  } else {
			  alert('Your USER ID cannot be empty');
		  }

      	  // Validate the password:
          if ($('#password').val().length > 0) {
                 password = $('#password').val();
           }  else {
			   alert('Password cannot be empty');
		   }

		   //Get selected choice (Student, Professor, Tutor)
    	   selected_choice = $('input[name="role"]:checked').val();
		   
		   //check that values are filled properly
		   console.log(user_ID)
           console.log(password)
           console.log(selected_choice)
 
		   var data = new Object();
		   data.user_ID = user_ID;
		   data.password = password;
		   data.selected_choice = selected_choice;
		  
		   $.ajax({
			url: 'login-ajax.php',
			type: 'get',
			data: data,
			dataType: 'json',
			success: function(response){
				var returned  = JSON.parse(response);
				if(returned == "CORRECT"){
					console.log("YOU ARE LOGGED IN");
					$('#results').text("YOU ARE LOGGED IN");
					
					changePage(selected_choice,user_ID);

				} else if(returned == "INCORRECT"){
					console.log("There was a problem with credentials");
					$('#results').text("There was a problem with credentials");
				}
			}
		});
		 
		// Return false to prevent an actual form submission:
		 return false;

	});  // END form handler

}); // END .ready
//=======================================================

function changePage(selected_choice){
	
	if(selected_choice == 'student'){
		console.log('STUDENT LOG ON')
		console.log('routing to new page')
		
		$.ajax({
			url: 'schedule.php',
			type: 'get',
			success: function(response){
			window.location.href = "schedule.php";
			}
		});

	} else if(selected_choice == 'professor'){
		console.log('PROFESSOR LOG ON')
		console.log('routing to new page')
		
		$.ajax({
			url: 'schedule.php',
			type: 'get',
			success: function(response){
			window.location.href = "schedule.php";
			}
		});

	} else if(selected_choice == 'tutor'){
		console.log('TUTOR LOG ON')
		console.log('routing to new page')
		
		$.ajax({
			url: 'tutor-dashboard.php',
			type: 'get',
			data: user_ID,
			success: function(response){
			window.location.href = "tutor-dashboard.php";
			}
		});
	}
	



}
//EnD CHANGE PAGE

//=======================================================
	/* ALTERNATE WAY TO MAKE AJAX REQUET  */









//========================================================
	

	/*

	SNIPPET FOR LATER USE:::

			 // Hide the form:
                //$('#login-form').hide();
                
                // Show a message:
                //$('#results').text('You are now logged in!');
		
            } else if (response == 'INCOMPLETE') {
                $('#results').text('Please provide an email address and a password!');
                    
            } else if (response == 'INVALID_EMAIL') {
                $('#results').text('Please provide your email address!');
            }
        

	*/