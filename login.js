

// Script 15.10 - login.js

	 // This script is included by login.php.
	 // This script handles and validates the form submission.
	 // This script then makes an Ajax request of login_ajax.php.
	
	 // Do something when the document is ready:
$(function() {
     
      console.log("made it to the javascript from login.php");
	 
	  // Assign an event handler to the form:
       $('#login-form').submit(function(event) {
          //event.preventDefault();

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

    	   selected_choice = $('input[name="role"]:checked').val();
			
		   console.log(user_ID)
           console.log(password)
           console.log(selected_choice)
 
 


		function makeRequest(){ 


				var data = new Object();
				data.user_ID = user_ID;
				data.password = password;
				data.selected_choice = selected_choice;
						
		// Create an object of Ajax options:
				var options = new Object();
				
			// Establish each setting:
				options.data = data;
				options.type = 'get';
				options.dataType = 'text';
				options.success = function(response){
							
					// Worked:
					if (response == 'CORRECT') {
						$('#login-form').append("we got CORRECT back");
						console.log('response returned from login-ajax.php says: CORRECT ');
							
					} else if (response == 'INCORRECT') {
						$('#login-form').append("we got CORRECT back");
						//console.log('response returned from login-ajax.php says: INCORRECT');
					}
				}
		}; 
          // End of success.
             options.url = 'login-ajax.php';
		   
			 // Perform the request:
              var request = $.ajax(options);
			  
			  request.done(function(msg){
				  //console.log(msg);

				  
				  }
			  })
			  
              // Return false to prevent an actual form submission:
              return false;
              
		 }); // End of form submission.
		 




    }); // End of document ready.
	
	

	/*
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