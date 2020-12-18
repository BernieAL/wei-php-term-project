<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/ xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/login.js"></script> 

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

<div id="form-div">
<form action="login.php" method="post" id="login-form">

     
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
        
</form>
</div>


<!--  login.js jquery to handle form submission and then make ajax request to
      login-ajax.php. 

      Then this js will recieve back a response from login-ajax.php and then update
      the page to display the response returned from the server side php
 
 -->



    </body>
    </html>