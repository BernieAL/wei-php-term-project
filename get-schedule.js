$(document).ready(function(){ 
     
    console.log("made it to the javascript from login.php");
   
    // Assign an event handler to the form:
     $('#login-form').submit(function(event) {
            event.preventDefault();
          console.log("form has been submitted");
          
        //Get selected choice (Student, Professor, Tutor)
        selected_choice = $('input[name="role"]:checked').val();
        console.log(selected_choice);
        
     }); //end form handler
     return false;
   }//end ready